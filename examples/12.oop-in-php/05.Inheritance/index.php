<?php 
	require_once(dirname(__FILE__).'/Pet.php');
	require_once(dirname(__FILE__).'/Dog.php');
	
	$myDog = new Dog("Raya", 4, "Labrador");
	
	$myDog->greet();
	$myDog->sayBreed();
	
	
	

?>