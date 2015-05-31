<?php 

class Dog {

   private $name;
   private $breed;
   protected $gender;

	public function __construct($name, $breed, $gender)
	{
		$this->name = $name;
		$this->breed = $breed;
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setGender( $gender ){
		$this->gender = $gender;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		if(mb_strlen($name, 'UTF-8') > 3){
			$this->name = $name;
		}
	}
	
	public function getBreed(){
		return $this->breed;
	}
	
	public function setBreed($breed){
		$this->breed = $breed;
	}
	
	public function sayWoof($identify){
		echo "<div style='border:3px solid green; padding:8px; margin:10px;'>";
		
		echo "<strong>Woof Woof!</strong>";
		
		if($identify){
			$this->sayName();
			$this->sayBreed();			
			$this->sayGender();
		}
		
		echo "</div>";
	}
	
	private function sayName(){
		echo "<br />My name: " . $this->name . "<br />";
	} 
	
	private function sayBreed(){
		echo "<br />The best breed in the world is mine :: " . $this->breed . "<br />";
	}

	protected function sayGender(){
		echo "<br />My gender is :: " . $this->gender . "<br />";	
	}
}

?>