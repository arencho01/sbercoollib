# sbercoollib
Пример использования:

include_once __DIR__ . '/vendor/autoload.php';

use SberCoollib\ExchangedAmount;

$amount = new ExchangedAmount('USD', 'UAH', 100);
$amount->toDecimal();
