<?php
/**
 * butik.php
 */


/**
 * Пути по-умолчанию для поиска файлов
 */
set_include_path(get_include_path()
    .PATH_SEPARATOR.'source');

/**
 ** Функция для автозагрузки необходимых классов
 */
function __autoload($class_name){
    include $class_name.'.class.php';
}

ini_set('display_errors', 1);
error_reporting(E_ALL);



// создаем товары в корзине
$odezhda1 = new Odezhda();
$odezhda1->setTitle('Брюки синие');
$odezhda1->setCost(1500);

$odezhda2 = new Odezhda();
$odezhda2->setTitle('Топ красный');
$odezhda2->setCost(1000);


$aksessuar1 = new Aksessuary();
$aksessuar1->setTitle('Часы золотые');
$aksessuar1->setCost(10000);

$korzina = new Checkout();
$korzina->addProduct($odezhda1);
$korzina->addProduct($odezhda2);
$korzina->addProduct($aksessuar1);

// на какую сумму товаров в корзине
print sprintf('<br>Товаров в корзине на %s рублей',$korzina->getCost());

//доставка в Москве курьером
$delivery = Delivery::getDelivery( Delivery::MOSCOW, DeliveryTypes::KURIER_MOSCOW);
print sprintf('<br><br> %s, %d рублей',$delivery->getDeliveryTitle(), $delivery->getDeliveryCost());

//итоговая сумма с доставкой
print sprintf('<br><br> Стоимость товаров с доставкой %s рублей', $korzina->getFinalCost($delivery));


//доставка в Москве не доступным для региона способом выдаст исключение
$delivery = Delivery::getDelivery( Delivery::MOSCOW, DeliveryTypes::DPD);





