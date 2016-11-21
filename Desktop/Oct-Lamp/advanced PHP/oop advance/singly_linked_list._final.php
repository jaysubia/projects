<?php
class Node
{
  public function __construct($val)
  {
    $this->value=$val;
    $this->next=null;
  }
}
class SinglyLinkeList
{
  public function __construct()
  {
    $this->head = null;
  }

  public function add($value)
  {
    if( ! $this->head)
    {
      $this->head = new Node($value);
    }
    else
    {
      $current= $this->head;

      while($current->next)
      {

        $current = $current->next;
      }

      $current->next = new Node($value);
    }
  }

  public function remove($value)
  {
    $current = $this->head;

    while($current->next)
    {
      if($current->value == $value)
      { 
        $current->value = null;
        return true;
      }

      $current = $current->next;
    }

    return nil;
  }

  public function insert($valueAfter, $newValue)
  {
    $current = $this->head;

    while($current->next)
    {
      if($current->value == $valueAfter)
      {
        $newNode = new Node($newValue);
        $newNode->next = $current->next;
        $current->next = $newNode;

        return true;
      }

      $current = $current->next;
    }

    return false;
  }

  public function printList()
  {
    $current = $this->head;

    while($current)
    {
      echo $current->value . "<br>";
      $current = $current->next;
    }
  }

  public function find($value)
  {
    $current = $this->head;

    while ($current)
    {
      if($current->value == $value)
      {
        return $current;
      }

      $current= $current->next;
    }

    return false;
  }
  public function isEmpty()
  {
    return ($this->head) ? false : true;
  }


}   
$list = new SinglyLinkeList();
$list->add(1);
$list->add(5);
$list->add(10);
$list->add(20);
$list->printList();
echo "<pre>";
$list->remove(1);
$list->insert(10, 15);
$list->printList();

var_dump($list);
var_dump($list->find(20));

var_dump($list->isEmpty());