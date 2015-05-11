<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
	$first_arr = array(); //same as $first_arr = [];

	$first_arr[] = 1;
	$first_arr[] = "две";
	$first_arr[] = "<span style=\"background-color:skyblue;\">три</span>";
	$first_arr[] = 466;
	$first_arr[] = 5;

	echo "<p>" . $first_arr[0] . "</p>";
	echo "<p>" . $first_arr[1] . "</p>";
	echo "<p>" . $first_arr[2] . "</p>";
	echo "<p>" . $first_arr[3] . "</p>";
	echo "<p>" . $first_arr[4] . "</p>";
?>
</body>
</html>

