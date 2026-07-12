<?php

// class Car{

// public $model;
// public $color;
// public $speed;

// public function __construct($model,$color,$speed)
// {
//     $this->model = $model;
//     $this->color = $color;
//     $this->speed = $speed;
// }

// public function  derive(){
//     echo "the car $this->model and is color $this->color and speed $this->speed drive";
// }

// public function  engine(){
//     echo "start engine";
// }

// // public function __destruct()
// // {
// //  echo "hi";
// // } 

// }

// $car = new Car("toyota" , 'green',140) ;  
// echo "<br>";
// $car1 = new Car ;  
// echo "<br>";
// $car2 = new Car ;  
// echo "<br>";
// $car3 = new Car ;  
// /model = "BMW";
// echo "<br>";

// echo $car1->color ="black"; 
// echo "<br>";

// echo $car1->speed =120; 
// echo "<br>";


// $names=['ah','mar'];
// $names[0];






/////////////////////////inherits



// class Animal{

// public $name;
// public $age;
// public $color;

// public function makeSound(){
//     echo "how how";
// }
// public function eat()  {
//     echo "eat";
// }

// }


// class Dog extends  Animal{}

// $dog = new Dog;
// echo $dog->name = "german"."<br>";
// echo $dog->age = 1 ."<br>";
// echo $dog->color= 'orange'."<br>";
// $dog->makeSound();

// echo "<br>";

// class Cat extends Animal{
//     #[Override]
//     public function makeSound()
//     {
//      echo "mewo mewo";
    
//     }
// }


// $cat = new Cat;
// // echo $dog->name = "german"."<br>";
// // echo $dog->age = 1 ."<br>";
// // echo $dog->color= 'orange'."<br>";
// $cat->makeSound();
// echo "<br>";
// $cat->eat();


///////////trait





// trait Animal{

// public $name;
// public $age;
// public $color;

// public function makeSound(){
//     echo "how how";
// }
// public function eat()  {
//     echo "eat";
// }

// }


// trait Dog{}



// class Cat{
//    use Animal;
//    use Dog;
// }


// $cat = new Cat;


///////////////////abstraction


// abstract class Animal{
// public $name;
// public function eat(){

// }
// abstract public function makesound() ;
// }

// class Dog extends Animal{

//     public function makeSound(){
//      echo "how how";
//     }
// }

// class Cat extends Animal{

//     public function makeSound(){
//      echo "mewo meow";
//     }
// }


// abstract class paymentGatway(){
//    abstract public function pay($amount);
// }


// abstract class PaymentGatway{
 
// abstract public function pay($amount);

// }

// class Paypal extends PaymentGatway{

//  public function pay($amount){
//     echo "with paypal ".$amount;
// }

// }

// class Stripe extends PaymentGatway{

//  public function pay($amount){
//     echo "with Stripe ".$amount;
// }

// }

// // $gaetway = new Paypal;
// // $gaetway->pay(100);


// function proccessPayment($getway , $amount){
//     echo $getway->pay($amount);
// }
// proccessPayment(new Paypal ,5000);
// echo "<br>";
// proccessPayment(new Stripe ,10000);

/////////////////const

// class User{

// //  public $role = "user";

// const ROLE ="user";  //public

// public function getRole(){
// //   self::ROLE; 
// //   User::ROLE; 
// }

// }


////////////////////////////Encapsulation


/**access modifier
 * public
 * private
 * protected
 */



// class User{
// private $name;

// }
// $user = new User ;




//  class  BanckAccount{
// private $balance;


// public function setBalance($balance){
//     $this->balance = $balance;
// }

// public function  getBalance(){
//     return $this->balance;
// }

//  }

//  $account = new BanckAccount;
//  echo $account->getBalance();
//  echo "<br>";
//  $account->setBalance(2000);
//  echo $account->getBalance();
//  echo "<br>";


//  class Account{
// public $color = "red";
// final function age(){
//     echo "hi";
// }
//  }


//  class User extends Account{
// #[Override]
// 	public function age()
//     {
//         return parent::age();
//     }
//  }
//  $c = new Account ;
// echo $c->color = "green";




/////////////////////////////interface

// interface PaymentMethod{

//     public function paypal();
//     public function stripe();

// }
// class paypal implements PaymentMethod {

//     public function paypal(){}
//     public function stripe(){}


// }




///////////////////////////////method chaining


// class Calculator{

// private $result ;

// public function sum($a , $b){
//     $this->result = $a+ $b;
//      return $this;
// }

// public function sub($a){
//     $this->result -= $a ;
//      return $this;
// }

// public function mult($a){
//     $this->result *= $a ;
//          return $this;

// }

// public function div($a){
//     $this->result /= $a ;
//          return $this;

// }
// public function result(){
//     echo $this->result;
// }

// }

// $calc = new Calculator ;
// // $calc->sum(4,5);
// // echo "<br>";
// // $calc->sub(4,5);
// // echo "<br>";

// // $calc->div(4,5);
// // echo "<br>";

// // $calc->mult(4,5);


// $calc->sum(70,10)->sub(10)->mult(50)->div(2)->result();

///////////////////////////Name spacing

// require_once "admin/test.php";
// require_once "User.php";

// use Admin\User;
// use Customer\User as cust;

// $object = new User;
// $object->users();

// echo "<br>";

// $cust = new cust;
// $cust->users();




////////////////////////////////dbconnection

/* 1 */

// $connection = mysqli_connect('localhost','root','','nti_online_g1');

// $query  ="SELECT * FROM `employees`";

// $result=  mysqli_query($connection,$query);
// $data = mysqli_fetch_all($result,MYSQLI_ASSOC);



/**2- oop*/

// $connection = new mysqli('localhost','root','','nti_online_g1');

// $query  ="SELECT * FROM `employees`";

// $result=  $connection->query($query);
// $data = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);



/*PDO   */
/**Select */
require "dbc.php";
// $query  ="SELECT * FROM `employees`"; 
// $result =  $dsn->query($query);
// $data =  $result->fetchAll(PDO::FETCH_ASSOC);

//  echo "<pre>";
//  print_r($data);


/**Insert */

// $query = "INSERT INTO employees(`name`)
// VALUES(:name)";

// $result = $dsn->prepare($query);
// $name="ahmed";
// $result->bindParam(':name',$name);
// $result->execute([
//     'name' => 'mohamed'
// ]);

//////////////////////////ploy


// class Animal{
//     public function makeSound(){
//         echo "german";
//     }
// }
// class Dog extends Animal{
//     #[Override]
//     public function makeSound()
//     {
//                echo "how how";
//     }
// }


// class Calc{
//     public function sum($a=0,$b=0,$c=0){
//         echo $a+$b+$c;
//             }
//         //       public function sum($a,$b,$c){
//         // echo $a+$b;
//         //     }
// }
// $calc = new Calc;
// $calc->sum(7,2);


/*/////////////////////////////////