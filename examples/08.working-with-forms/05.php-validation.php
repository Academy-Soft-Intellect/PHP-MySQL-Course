﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Форми</title>
</head>
<style>
	form{
		font-size: 19px;
		border: 2px solid red;
		padding: 10px;
		margin:20px;
	}
	
	form > div {
		margin-bottom: 8px;
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
            echo "<div><strong>Успешна регистрация!</strong></div>";
        } else{
            echo "<div><strong>Невалидна информация! Моля Опитайте пак</strong></div>";
        }
    }
?>
<form action="" method="POST" >
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