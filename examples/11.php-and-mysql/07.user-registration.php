<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<style>
	form{
		font-size: 22px;
		border: 1px solid blue;
		padding: 10px;
		margin:10px;
	}
	form > div {
		margin-bottom: 12px;
	}
</style>

<body>
<?php

	function isValid($username, $password, $repass){
		if(mb_strlen($username, "UTF-8") > 3 && mb_strlen($password, "UTF-8") > 3 && $password == $repass){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$username = $_POST["username"];
		$pass = $_POST["pass"];
		$repass = $_POST["repass"];
		
		$isValid = isValid($username, $pass, $repass);
		
		if($isValid){
		
			// NEVER STORE CREDENTIALS IN REPOSITORIES!
			$servername = "localhost";
			$dbusername = "phpcourseUser";
			$dbpassword = "SomeHardPassword1";
			$dbname = "ActiveUsers";
			
			$connection = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
					
			if (!$connection) {
				die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
			} 
			
			mysqli_set_charset($connection, "utf8");
			
			$passwordHash = md5($pass);
			
			$sql = "INSERT INTO Users (Username, Password)".
				   "VALUES ('$username', '$passwordHash')";
				   
			$queryResult = mysqli_query($connection, $sql);
			
			if ($queryResult === TRUE) {
				$insertedId =  mysqli_insert_id($connection);
				echo "Успешно регистриран user с id = " .  $insertedId;
			} else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
			}
			
			mysqli_close($connection);
		} else{
			echo "<div><strong>Невалидна информация! Моля Опитайте пак</strong></div>";
		}
		
	} else {
?>

<form action="07.user-registration.php" method="POST" >
	<div>
		<span>Потребителско Име:</span>
		<input type="text" name="username" />
	</div>
	<div>
		<span>Парола:</span>
		<input type="password" name="pass" />
	</div>
	<div>
		<span>Повторете Парола:</span>
		<input type="password" name="repass" />
	</div>
	<div>
		<input type="hidden" name="check" value="1" />
		<input type="submit" value="Регистрирай" />
	</div>
</form>	

<?php
	}
?>


</body>
</html>