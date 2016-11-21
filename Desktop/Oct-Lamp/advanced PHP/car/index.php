<<?php

class Animal {
    public $name;
    public $health;
  public function __construct($name)
    {
      
      $this -> name = $name;
      $this -> health = 100;


    
    }




    public function walk(){

      $this->health+=-1;

    }

    public function run(){

      $this->health+=-5;


    }

    public function displayHealth(){

      echo $this->health;
      echo $this->name;


    }
}

  $animal = new animal(animal)
  $animal->displayHealth();
  // $obj->display_all();
  // $obj2 = new Car(15000,50,0,80);
  // $obj2->display_all();
  // $obj3 = new Car(1000,70,60,50);
  // $obj3->display_all();
  // $obj4 = new Car(3000,60,40,60);
  // $obj4->display_all();
  // $obj5 = new Car(20000,100,100,110);
  // $obj5->display_all();
  





?>
