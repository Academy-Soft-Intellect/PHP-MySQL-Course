<?php
require_once "simple_class.php";

$simple_class1 = new SimpleClass();
$simple_class2 = new SimpleClass();
$simple_class3 = new SimpleClass();
$simple_class4 = new SimpleClass();
$simple_class5 = new SimpleClass();

echo "Simple Class called <b>5</b> times: <br />";
echo "Number of 'connections': ". SimpleClass::getTotalCalls();
echo "<br /><br />";


require_once "singleton.php";

$simple_class1 = Singleton::getInstance();
$simple_class2 = Singleton::getInstance();
$simple_class3 = Singleton::getInstance();
$simple_class4 = Singleton::getInstance();
$simple_class5 = Singleton::getInstance();


echo "<br /><br />";
echo "Singleton called <b>5</b> times: <br />";
echo "Number of 'connections': ". Singleton::getTotalCalls();
