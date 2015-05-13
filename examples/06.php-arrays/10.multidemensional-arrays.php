<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Многомерни Масиви</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Име</th>
        <th>Години</th>
    </tr>
<?php
    $students = array(
        array(
			'name' => 'Мартин',
			'age' => 21),
        array(
            'name' => "Александра",
            'age' => 17),
        array(
            'name' =>"Николай",
            'age' => 14),
        array(
            'name' =>"Юлиана ",
            'age' => 11)  

    );
	
	$countStudents = count($students);
	
    for($i = 0; $i < $countStudents; $i++) {
		
		$currentStudent = $students[$i];

		echo "<tr>";

		foreach($currentStudent as $value){
		  echo "<td>$value</td>";
		}
		  
		echo "</tr>";
    }
?>
</table>
</body>
</html>

