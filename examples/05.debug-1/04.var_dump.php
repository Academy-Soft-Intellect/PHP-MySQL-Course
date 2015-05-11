<?php
$number = 1;
$bool = true;
$float = 1.5;
$string = "STRING";
$array = ['a' => 1];

# example 1
var_dump("NUMBER: ");
var_dump($number);
var_dump("<br />");

var_dump("BOOL: ");
var_dump($bool);
var_dump("<br />");

var_dump("FLOAT: ");
var_dump($float);
var_dump("<br />");

var_dump("STRING: ");
var_dump($string);
var_dump("<br />");


var_dump("ARRAY: ");
var_dump($array);
var_dump("<br />");

#NOT OUTPUTED
var_dump($array, true);

echo "<br /><br /><br /><br />";

$output = "From var ".var_dump($array, true);
echo $output;