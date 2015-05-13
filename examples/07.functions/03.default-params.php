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
	
	$result = multiply($number, $multiplier);
	
	echo "12 умножено по 3 = $number <br />";

	$result = multiply($number);

	echo "(Без множител) 12 умножено по 3 = $number <br />";
	
	
	function multiply($number, $multiplier = 3) {
		$number *= $multiplier;
		return $number;
	}

	

?>

</body>
</html>