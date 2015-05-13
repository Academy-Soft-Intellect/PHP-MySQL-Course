<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
	
	
	$number = 12;
	
	$multiplier = 3;
	
	multiply($number, $multiplier);

	echo "12 умножено по 3 = $number";
	echo '<br /><br />';

	multiply($number, 2);	

	echo "36 умножено по 2 = $number";
	echo '<br /><br />';
	
	
	function multiply(&$number, $multiplier) {
		$number *= $multiplier;
	}
	echo '<br /><br />';





	echo "Пример с масив.";
	echo '<br /><br />';

	$array = [
		"A" => 1,
		"B" => 2
	];

	foreach ($array as $key => $value) {
		echo $key .' => '.$value.'<br />';
		$value = 100000;
	}
	echo "След обхождането: <br />";
	print_r($array);



	echo '<br /><br /><br /><br />';
	echo 'Подаване на стойноста по референция.';
	echo '<br /><br />';

	foreach ($array as $key => &$value) {
		echo $key .' => '.$value.'<br />';
		$value = 100000;
	}
	echo "След обхождането: <br />";
	print_r($array);

?>

</body>
</html>