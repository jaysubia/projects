<<?php
  class Node
  {
    public $next;
    public $value;
    
    public function __construct($val)
    {
      $this->value = $val;
      $this->next = null;
    }
  }
class Queue
{
  private $front; // the front of our Queue
  private $rear; // the rear of our Queue
  public $maxSize; // how many elements can be in our queue

  public function __construct($val)
  {
    $this->front = null;
    $this->rear = null;
    $this->maxSize = $val;
  }
  public function enqueue($val) // it will add an element to the end of the Queue
  {
    if($this->front == null){
      $this->front = new Node($val);
    }
    else{
      $count = 1;
      $current = $this->front;
      
      while($current->next){
        $current = $current->next;
        $count = $count + 1;
      }
      if($count < $this->maxSize){
        $current->next = new Node($val);
      }
    }
  }

  public function dequeue() // it will remove an element from the front of the Queue
  {
    $this->front = $this->front->next;
  }

  public function front() // returns the element in the front of your Queue
  {
    return $this->front->value;
  }

  public function rear() // returns the element in the rear of your Queue
  {
    $current = $this->front;

    while($current->next){
      $current = $current->next;
    }

    return $current->value;
  }

  public function isEmpty() // returns true if the Queue is empty
  {
    if($this->front == null){
      return true;
    }

    return false;
  }

  public function isFull() // returns true if the Queue is full
  {
    $count = 0;
    $current = $this->front;

    while($current){
      $current = $current->next;
      $count = $count + 1;
    }

    if($count == $this->maxSize){
      return true;
    }
  }

  public function printList()
  {
    $current = $this->front;

    while($current){
      echo $current->value . "<br>";
      $current = $current->next;
    }
  }
}
$q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
var_dump($q);
var_dump($q->isEmpty()); // returns true
$q->enqueue(100); // Queue: 100
$q->enqueue(20);
$q->enqueue(50);
$q->enqueue(40);
$q->enqueue(10);
$q->enqueue(70);
$q->enqueue(90);
echo $q->rear() . "<br>"; // returns 
echo $q->front() . "<br>"; // returns 100
$q->dequeue();
$q->enqueue(90);
$q->printList();
var_dump($q->isFull()); // returns true
?>