<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
header("content-type:text/html;charset=utf-8");
include_once('crypt.class.php');
//$cry = new Crypt("aaa");
//$str = "asdasd啦啦啦";
//var_dump($str);
//$str = $cry->encrypt($str);
//var_dump($str);
//$str = $cry->decrypt($str);
//var_dump($str);

$cry = new Crypt("123456");

var_dump($cry->decrypt($_REQUEST['data']));
?>