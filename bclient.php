<?php
/**
 * /bclient.php
 */
header("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));


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
ini_set("soap.wsdl_cache_enabled", "0");
error_reporting(E_ALL);

class Request{
    public $title;
    public $categoryId;
}


$product = new Request();
$product->title = 'Заголовок тестового продукта';
$product->categoryId = 20;


try{

    $client = new SoapClient("http://{$_SERVER['HTTP_HOST']}/myservice.wsdl", array( 'soap_version' => SOAP_1_2));
    echo '<pre>';
    print_r($client->__getFunctions());//получаем список методов сервера
    var_dump($client->getProductList($product));

}catch(SoapFault $e){
    echo $e->getMessage();
}
