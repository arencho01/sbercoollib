<?php

namespace SberCoollib;

class ExchangedAmount
{
    public $from;
    public $to;
    public $amount;

    public function __construct($from, $to, $amount)
    {
        $this->from = $from;
        $this->to = $to;
        $this->amount = $amount;
    }

    public function toDecimal()
    {
        $url = 'https://www.cbr.ru/scripts/XML_daily.asp';
        $xml = simplexml_load_file($url);

        $valutes = [];

        foreach ($xml->Valute as $valute)
        {
            $charCode = (string)$valute->CharCode;
            $value = str_replace(',', '.', (string)$valute->Value);
            $nominal = str_replace(',', '.', (string)$valute->Nominal);
            $valutes[$charCode][] = $value;
            $valutes[$charCode][] = $nominal;
        }

        if(isset($valutes[$this->from]) && isset($valutes[$this->to])) {
//            $fromValue = $valutes[$this->from];
//            $toValue = $valutes[$this->to];
            $res = round(($this->amount * round($valutes[$this->from][0], 2)) * ($valutes[$this->to][1] / $valutes[$this->to][0]), 2);

            return $res;
        }
        else {
            throw new \Exception('Валюта не найдена');
        }

    }
}



