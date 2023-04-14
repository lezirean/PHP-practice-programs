<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Report Compilation</title>
</head>

<body>
	<!--body bgcolor="#121212"
	//font style="text-color:white;"
	-->
	
	<?php		
		
		// LESSON 6:
		interface FruitInterface{
    		public function ripen();
 		}

  		class Fruit{
    		// Properties
    		public $name;
    		public $color;
    
    		// Methods 
    		public function __construct($name, $color){
      			$this -> name = $name;
      			$this -> color = $color;
    		}
    
    		public function intro(){
      			echo "The fruit is {$this -> name} and the color is {$this -> color}.";
    		}
  		} //end class Fruit

  
  		class Strawberry extends Fruit implements FruitInterface{
    		public $weight;
    
    		public function __construct($name, $color, $weight){
      			$this -> name = $name;
      			$this -> color = $color;
      			$this -> weight = $weight; 
    		}
    
    		public function intro(){
      			echo "The fruit is {$this -> name}, the color is {$this -> color}, 
      			and the weight is {$this -> weight} grams.";
    		}
    
    		// defines ripen() method from the FruitInterface interface
    		public function ripen(){
      			echo "\n{$this -> name} is now ripe!";
    		}
  		} //end class Strawberry

  		$strawberry = new Strawberry("Strawberry", "red", 50);
  		$strawberry -> intro();
  		echo "<br>";
  		$strawberry -> ripen();

?>


		
</body>
</html>


interface Vehicle{
	public function brake();
}

class Bicycle implements Vehicle{
	public function brake(){
		echo "This is the implementation of how the bicycle brake works";
	}

}

class Truck implements Vehicle{
	public function brake(){
		echo "This is the implementation of how the truck brake works";
	}

}