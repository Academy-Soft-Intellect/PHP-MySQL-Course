<?php 

trait Greeting {	
	public function greet(){

		$className = get_class($this);

		echo "<div style='border:3px dotted red; padding: 3px; margin:10px;'>";
		echo "I Am $this->age years old $className.<br />";
		echo "</div>";
	}
}
?>