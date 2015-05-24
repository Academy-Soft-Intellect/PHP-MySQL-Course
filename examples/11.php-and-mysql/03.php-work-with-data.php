<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
</head>

<body>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Детска Градина</th>
			<th>Промени</th>
			<th>Изтрий</th>
		</tr>
	</thead>

<?php
	// NEVER STORE CREDENTIALS IN REPOSITORIES!
	$servername = "localhost";
	$username = "phpcourseUser";
	$password = "SomeHardPassword1";
	$dbname = "kindergarder";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
			
	if (!$connection) {
		die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
	} 
	
	mysqli_set_charset($connection, "utf8");
	
	$sql = "SELECT KinderGarderID, `Name`, Phone ". 
		   "FROM kindergarder.kindergarder;";
		   
	$result = mysqli_query($connection, $sql);
	
	
	if (mysqli_affected_rows($connection) > 0) {
	
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["KinderGarderID"];
			$name = $row["Name"];
			$phone = $row["Phone"];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$name</td>";
			echo "<td>$phone</td>";
			echo "<td><a href=\"04.php-update.php?id=$id\">Промени</a></td>";
			echo "<td><a href=\"05.php-delete.php?id=$id\">Изтрий</a></td>";
			echo "</tr>";
		}
	} else {
		echo "Няма Резултати";
	}
	
	 mysqli_close($connection);
?>

</table>

</body>
</html>