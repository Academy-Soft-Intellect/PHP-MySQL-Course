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

if(isset($_POST['check']) && $_POST['check'] == '1')	{
    echo "Потребителско Име: ".$_POST['username']."<br />";
    echo "Парола: ".$_POST['pass']."<br />";
    echo "Повторете Парола: ".$_POST['repass']."<br />";
}

	
		
?>

<form action="03.post-request.php" method="POST" >
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


</body>
</html>