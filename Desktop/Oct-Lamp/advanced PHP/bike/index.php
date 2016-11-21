<?php

class Bike {
  	public $price;
  	public $max_speed;
    public $miles;
	public function __construct($price, $max_speed)
	  {
  		
  		$this -> price = $price;
  		$this -> max_speed = $max_speed;
  		$this -> miles = 0;


	  }


  	public function displayInfo(){


  		echo $this -> price;
  		echo $this -> max_speed;
  		echo $this -> miles;
		
		return $this;

	  }

    public function drive() {

    	echo "Driving <br>";

    	$this->miles+=10;

    	return $this;

	  }

    public function reverse() {

    	echo "Reversing <br>";

    	$this->miles+=-5>0;

    	return $this;


 
	  }
}

	$obj = new Bike(20,30);
	$obj->drive()->drive()->drive()->drive()->reverse()->displayInfo();
	$obj2 = new Bike(50,80);
	$obj2->displayInfo();
	$obj2->drive();
	$obj2->displayInfo();
	$obj2->drive();
	$obj2->reverse();
	$obj2->displayInfo();
	$obj2->reverse();
	$obj2->displayInfo();
	$obj3 = new Bike(80,10);
	$obj3->reverse();
	$obj3->displayInfo();
	$obj3->reverse();
	$obj3->displayInfo();
	$obj3->reverse();
	$obj3->displayInfo();






?>