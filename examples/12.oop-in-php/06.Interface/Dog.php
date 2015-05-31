<?php 

require_once(dirname(__FILE__).'/Creature.php');

class Dog implements Creature{
	
	protected $height;
	
	public function __construct($age, $height)
	{
		$this->age = $age;
		$this->height = $height;
	}
	
	// Required by the Interface
	public function greet($additionalGreed = '')
	{
		echo "<div style='border:3px dotted blue; padding: 3px; margin:10px;'>";
		echo "Hello, I Am an Dog<br />";
		echo "I Am $this->age years old.<br />";
		echo "My height is $this->height !";
		echo "</div>";
	}
}
?>