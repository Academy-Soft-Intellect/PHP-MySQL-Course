<?php
$number = 1;
$bool = true;
$float = 1.5;
$string = "STRING";
$array = ['a' => 1];

# example 1
print_r("NUMBER: ");
print_r($number);
print_r("<br />");

print_r("BOOL: ");
print_r($bool);
print_r("<br />");

print_r("FLOAT: ");
print_r($float);
print_r("<br />");

print_r("STRING: ");
print_r($string);
print_r("<br />");


print_r("ARRAY: ");
print_r($array);
print_r("<br />");

#NOT OUTPUTED
print_r($array, true);

echo "<br /><br /><br /><br />";

$output = "From var ".print_r($array, true);
echo $output;