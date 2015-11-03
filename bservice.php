<?php
/**
 * bservice.php
 */
header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));


set_include_path(get_include_path()
    .PATH_SEPARATOR.'source');

function __autoload($class_name){
    include $class_name.'.class.php';
}

ini_set("soap.wsdl_cache_enabled", "0");

$server = new SoapServer("http://{$_SERVER['HTTP_HOST']}/myservice.wsdl.php");
$server->setClass("SoapGateWay");
$server->handle();