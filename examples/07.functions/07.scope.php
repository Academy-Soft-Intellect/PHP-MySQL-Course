<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Reference</title>
</head>
<body>
<?php
	
	$a = "Soft Intellect";
	
	function showA(){
		global $a; 
		
		echo 'Стойността на променливата $а е : <strong>' . $a . '</strong>'; 
	}

	showA();


	echo "<br /><br /><br />";
	echo "Без global <br />";

	function withoutGlobal(){

		echo 'Стойността на променливата $а е : <strong>' . $a . '</strong>'; 
	}
	withoutGlobal();

?>

</body>
</html>