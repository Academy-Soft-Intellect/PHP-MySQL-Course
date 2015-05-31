<?php 

require_once(dirname(__FILE__).'/Creature.php');

class Dog{
	use Greeting;
	
	protected $height;
	
	public function __construct($age, $height)
	{
		$this->age = $age;
		$this->height = $height;
	}
	
}
?>