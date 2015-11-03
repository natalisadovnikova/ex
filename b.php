<?
phpinfo();
$_10bar_pass = "12345";

print('<br>');
// Правильные имена
define("DBServer",     "localhost");
define("DBCatalog",    "php_online");
define("DBUser", "root");

// неправильные имена
define("2pass",    "userpass");
//
//echo __LINE__,'<br>', __FILE__, '<br>', __CLASS__, '<br>', __DIR__, '<br>', __FUNCTION__,'<br>', '<br>', __METHOD__, '<br>',
//__NAMESPACE__,'<br>', __TRAIT__,'<br>';

//
//$i = 1;
//
//$j = ++$i - $i++;
//print('<br>e<br>');
//print $j;
//print $i;

print('<br>');

$names = array('Ярослав', 'Александр');
    for($i = 0; $i < 100; $i++)
    {
        if($names[$i] == 'Александр') break;
    }
    echo 'Имя "Александр" стоит на ' . $i . ' позиции';
echo explode(',',$str);
// выведет:
// 'Имя "Александр" стоит на 2 позиции'


print('<br>');
class A
{
    function A()
    {
        echo "I am the constructor of A.<br />\n";
    }
}

print('<br>');
class B extends A
{
    function A1()
    {

    }
}

// This will call B() as a constructor
//$b = new B(1);
//function hello(){
//    throw new Exception('eto message');
//}

//try{
//    hello();
//}
//catch(Exception $e){
//
//    print($e->getMessage());
//}


$keys = array(0, 1, 2);
$vals = array('а', 'б', 'в');
$res = array_combine($keys, $vals);
//  $res содержит
print_r($res);

$arr = array('а', 'б', 'в',
    'а', 'в', 'а', 'g');
//$res = array_count_values($arr);
print 'hhhh';
// $res содержит
print_r($res);
print_r(array_flip($res));
print_r($res);
//print_r(array_shift($res));
//print_r($res);

print_r(array_slice($res, 1,2));
print_r(array_unshift($res,'aaa'));
print_r($res);
print('<br>');print('<br>');print('<br>');

//print_r($GLOBALS);


//print_r(array_merge($res, $vals));
//print_r(array_diff($arr, $vals));

//echo 'параметры сервера:' . "<br />\n";
//
//echo "Операционная система: " .
//    $_SERVER["OS"] . "<br />\n";
//echo "Web-сервер: " .
//    $_SERVER["SERVER_SOFTWARE"] . "<br />\n";
//echo "Имя сервера: " .
//    $_SERVER["SERVER_NAME"] . "<br />\n";
//echo "Адрес сервера: " .
//    $_SERVER["SERVER_ADDR"] . "<br />\n";
//echo "Порт сервера: " .
//    $_SERVER["SERVER_PORT"] . "<br />\n";
//echo "Адрес клиента: " .
//    $_SERVER["REMOTE_ADDR"] . "<br />\n";
//echo "Путь к документам на сервере: " .
//    $_SERVER["DOCUMENT_ROOT"] . "<br />\n";
//echo "Полный путь к текущему скрипту: " .
//    $_SERVER["SCRIPT_FILENAME"] . "<br />\n";
//echo "Имя текущего скрипта: " .
//    $_SERVER["PHP_SELF"] . "<br />\n";
//print_r($_ENV);
//
//

$string = '34ttt3';

if (ereg("^[0-9]{1,77}ttt",$string)) echo "yes"; else echo "no";


if (preg_match("/(.)\\1\\1/",$string)) echo "yes"; else echo "no";

$a = "012345";
print($a["2"]);
print('<br>');
print($a[2]);
print('<br>');
$a[$a["2"]] = 2;

print($a);
print('<br>');
print($a[$a["2"]]);



?>

<form enctype="multipart/form-data" method="POST" action="">
    <input type="file" name="nnn" />
</form>
<a href="http://mail.ru" onclick="alert(1);return false;" >mail.ru</a>




