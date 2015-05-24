<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Insert</title>
</head>

<body>
<?php
	
	if(isset($_GET["id"])){
		$id = $_GET["id"];
			
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
		
		$sql = "DELETE FROM kindergarder.kindergarder ".
			   "WHERE KinderGarderID=$id;";
			   
		$queryResult = mysqli_query($connection, $sql);
		
		if ($queryResult === TRUE) {
			echo "Успешно изтрит резултат с id = " .  $id;
		} else {
			echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
		}
		
		mysqli_close($connection);
	}
?>
</body>
</html>