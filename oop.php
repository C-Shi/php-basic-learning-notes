<?php
  class Person{
    // public property is available outside of this class
    private $name;
    private $email;

    // __construct is the function that will run when instance created
    public function __construct($name, $email){
      $this->name = $name;
      $this->email = $email;

      // __CLASS__ will return the name of its class
      echo __CLASS__. ' created<br>';
    }

    // public function __destruct(){
    //   echo __CLASS__ . ' destroyed<br>';
    // }

    // add public getter function
    public function getName(){
      return $this->name;
    }

    public function setName($name){
      $this->name = $name;
    }

    public function getEmail(){
      return $this->email;
    }

    public function setEmail($email){
      $this->email = $email;
    }
  }

  $person1 = new Person('John Doe', 'jd@gmail.com');


  echo $person1->getName();

  // class inheritance
  class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
      // When inherited class created construct, it has to call parent::__construct first;
      parent:: __construct($name, $email, $balance);
      $this->balance = $balance;
      echo 'A new ' . __CLASS__ .' has been created<br> ';
    }

    public function setBalance($balance){
      $this->balance = $balance;
    }

    public function getBalance(){
      return $this->balance . '<br>';
    }
  }

  $customer1 = new Customer('Lucy Hunt', 'LY@gmail.com', 300);
  echo $customer1->getBalance();

 ?>