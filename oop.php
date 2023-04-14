<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	class PersonalInformation
	{
		
		
		private $fullname;
		private $age;
		private $gender;
		
		
		
		
		public function setfullname($fullname){
			$this->fullname = $fullname;
		}
		
		public function setage($age){
			$this->age = $age;
		}
		
		public function setgender($gender){
			$this->gender = $gender;
		}
		
		
		public function getfullname(){
			return $this->fullname;
		}
		
		public function getage(){
			return $this->age;
		}
		
		public function getgender(){
			return $this->gender;
		}
		
		
		
		
	}
	
	
	
	class Address extends PersonalInformation
	{
		
		private $houseno;
		private $street;
		private $city;
		
	
		
		
		public function gethouseno(){
			
		return $this->houseno;
		}
		
		public function getstreet(){
			return $this->street;
			
		}
		
		public function getcity(){
			return $this->city;
		}
		
		
		public function sethouseno($houseno){
			$this->houseno = $houseno;
		}
		
		public function setstreet($street){
			$this->street = $street;
		}
		
		
		public function setcity($city){
			$this->city = $city;
		}
		
	}
	
	

	$objAddress = new Address();
	
	
	$objAddress->sethouseno(123);
	$objAddress->setstreet("Maligay Street");
	$objAddress->setcity("Taguig City");
	
	$objAddress->setfullname("Ronald Joy");
	$objAddress->setage(33);
	$objAddress->setgender("male");
	
	echo "Fullname: ".$objAddress->getfullname()."<br/>";
	echo "Age: ".$objAddress->getage()."<br/>";
	echo "Gender: ".$objAddress->getgender()."<br/>";
	
	
	echo "Address: ".$objAddress->gethouseno().", ".$objAddress->getstreet().", ".$objAddress->getcity();
	
	
	
	
	
	
	
	
	
	/*
	$objPersonalInformation = new PersonalInformation();
	
	$objPersonalInformation->setfullname('Princess');
	$objPersonalInformation->setage(20);
	$objPersonalInformation->setgender('Female');
	
	echo $objPersonalInformation->getfullname()."<br/>";
	echo $objPersonalInformation->getage()."<br/>";
	echo $objPersonalInformation->getgender()."<br/>";
	
	$objPersonalInformation->setfullname('Ronald');
	$objPersonalInformation->setage(33);
	$objPersonalInformation->setgender('Male');
	
	echo $objPersonalInformation->getfullname()."<br/>";
	echo $objPersonalInformation->getage()."<br/>";
	echo $objPersonalInformation->getgender()."<br/>";
	*/
	
	
	?>
</body>
</html>