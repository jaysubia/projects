<?php

class Animal {
    public $name;
    public $health;
    public function __construct($name)
    {
      
      $this->name = $name;
      $this -> health = 100;


    
    }




    public function walk(){

      $this->health+=-1;

      return $this;

    }

    public function run(){

      $this->health+=-5;

      return $this;


    }

    public function displayHealth(){

      echo '<br>' . 'Name of the Animal is ' . $this->name;
      echo '<br>' . 'It has a current health of ' . $this->health;
    

      return $this;


    }


}


  $cat = new animal('cat');
  $cat->walk()->walk()->walk()->run()->run()->displayHealth();

    class dog extends Animal{

      public function __construct()
    {
      // parent::__construct();
      $this->name="dog";
      $this->health=150;
      

    }
      public function pet(){
        $this->health+=5;
        return $this;
      }
      public function walk(){

      $this->health+=-1;

      return $this;

    }

    public function run(){

      $this->health+=-5;

      return $this;


    }
      public function displayHealth(){
        parent::displayHealth();

        return $this;
      }
    }

  


  $rex = new dog('dog');
  $rex->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
  

 class dragon extends Animal{

      public function __construct()
    {
      // parent::__construct();
      $this->name="dragon";
      $this->health=170;
      

    }
      public function fly(){
        $this->health+=10;
        return $this;
      }
      public function walk(){

      $this->health+=-1;

      return $this;

    }

    public function run(){

      $this->health+=-5;

      return $this;


    }
      public function displayHealth(){
        
         echo '<br>' . 'This is a ' . $this->name;
         parent::displayHealth();

        return $this;
      }








































































































































































































































































































































       
    }

  


  $drago = new dragon('dragon');
  $drago->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
  



?>
