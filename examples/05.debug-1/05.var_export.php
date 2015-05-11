<?php
$number = 1;
$bool = true;
$float = 1.5;
$string = "STRING";
$array = ['a' => 1];

# example 1
var_export("NUMBER: ");
var_export($number);
var_export("<br />");

var_export("BOOL: ");
var_export($bool);
var_export("<br />");

var_export("FLOAT: ");
var_export($float);
var_export("<br />");

var_export("STRING: ");
var_export($string);
var_export("<br />");


var_export("ARRAY: ");
var_export($array);
var_export("<br />");

#NOT OUTPUTED
var_export($array, true);

echo "<br /><br /><br /><br />";

$output = "From var ".var_export($array, true);
echo $output;