<?php 
	require_once(dirname(__FILE__).'/Dog.php');
	
	$josefine = new Dog("Josefine", "Labrador", "Male");
	
	$josefine->sayWoof(true);


	
	$harriet = new Dog("Harriet", "Golden retriever", "Female");
	
	$harriet->sayWoof(false);
	$harriet->setName("Harry");
	$harriet->sayWoof("Male");
	
	$harriet->sayWoof(true);
	

?>