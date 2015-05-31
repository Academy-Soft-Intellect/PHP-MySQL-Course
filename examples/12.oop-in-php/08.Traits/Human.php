<?php 

require_once(dirname(__FILE__).'/Creature.php');

class Human {
	use Greeting;

	
	protected $name;
	
	public function __construct($name, $age)
	{
		$this->age = $age;
	}
}
?>