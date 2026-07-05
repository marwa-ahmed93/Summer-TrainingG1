<?php


// echo "hello world";
// echo "hello world";
// echo "hello world";
// echo "hello world <br>";



// echo 5+5 ;

// int x = 10;

// $name ="marwa";  //string
// $number = 15;     //integer

// echo gettype($number);


// $age = 18;
// if($age >= 18)  //true
//     {
       
// echo "welcome at NTI";
// }

// elseif($age < 15 ){
    
//   } 

// else{
//     echo "you ca`t register";
// }

// if(){
// echo "welcome";
// }
// else{
//     echo "none";
// }

// $favColor = 'red';

// switch($favColor){
//     case "green":
//         echo "my favColor is green";
//         break;

//            case "red":
//         echo "my favColor is red";
//         break;

//          case "blue":
//         echo "my favColor is blue";
//         break;

//          case "white":
//         echo "my favColor is white";
//         break;

//         default :
//         echo "none";
// }


// if($favColor == "green"){
//     echo "my favColor is green";
// }
// elseif($favColor == "red"){
//             echo "my favColor is red";

// }
// elseif($favColor == "red"){
//             echo "my favColor is red";

// }
// elseif($favColor == "red"){
//             echo "my favColor is red";

// }


// $x =  "10"+20;   //30    
// echo $x;

// $var =(int) "ahmed" + 20;   //0+20 =>20
// echo $var ;


// $y =(int) 5.5 +30 ;
// echo $y;

/**
 * == value 
 * === value data type
 */

// $x = 10;
// $y ="10";
// if($x == $y){
//     echo "equal";
// }
// else{
//     echo "not equal";
// }

// $gender = "mail";
// if($gender == "femail"){
//     echo "welcome"; 
// }




/////////////////**Operators *///////////////////////////////





// $x = 10 ;
// $y = 2;
// echo $x**$y;

 
// $x = 10 ; 
//   $x %=2;                    //$x = $x+1;
// echo $x;



////////Increment / Decrement Operators////////////
/**post  pre */

 $i = 5;
// // $i++;
// echo $i++ ."<br>";    // 5  post increment
// echo $i;              //6


// $i = 5;
// // $i++;
// echo ++$i."<br>";    // 6  pre increment
// echo $i;             //6

//   5    +2   =>7  +  7  =>14
// $y = $i++  +2   +  ++$i ;
// echo $y;

// $a = 10;
// $b= $a++;   //10
// echo $a ."<br>";  //11
// echo $b ."<br>";   //10

// $x = 6;
// //    6     4    7    3     9
// $y = $x++ + 4 + $x++ + 3 + ++$x ;
// echo $y;



/**      LOOP   
 * 1-for
 * 2-while
 * 3-do while
     */
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";
// echo "hello";

// for( $i = 20 ;  $i>0   ; $i-- ){
//     echo "hello $i <br>";
// }


// for(  ;  ;  ){
//     echo "hello  <br>";
// }



// $i = 0; 
// while($i <= 20){
// echo "hello $i <br>";
// $i++;
// }

// $correctPin = 11233;
// $enterPin = null;

// while($correctPin != $enterPin){
//     echo "please enter Your pin";
//     $enterPin =11233;
// }


// $age = 15 ;
// while($age >20 ){
//     echo "hello";
// }


// do{
//   echo "hello";
// }while($age >20 );


// for($i = 1 ;  $i<=50 ; $i++){
//     if($i % 5 == 0){
//         echo "BOOM";
//         continue;
//     }
//     echo " <br> $i <br>";
// }

/**   1234 BOOM 6789 BOOM 11 12 13 14 BOOM            */



/**        ARRAy                */


// $students = "ahmed";
// $students1 = "moh";
// $2 = "tar";
// $students = "vc";
// $students = "mnk";

// $students = [];
// $students = array();
// echo gettype($students);

//indexed Array
//             0           1          2        3         4      5   6       7
//$students = ['ahmed' , 'mohamed' , 'tariq','youseef' , true , 12 , 'red','green' ,'black'];
// echo $students;

//print_r($students);
// var_dump($students);
//  echo $students[0];
//  echo $students[1];
//  echo $students[2];
//  echo $students[3];

// echo count($students);

// for($i=0 ; $i < count($students) ;$i++){
//     echo $students[$i]."<br>";
// }

// foreach($students as $student){
   
// echo $student."<br>";

// }

/////////////ASSOC ARRAY////////////////
// $persons = [ 

//     'name'=> 'zain' ,
//     'age' =>1,
//     'gender'=> 'mail'
    
//     ];

//     $persons['name'] = 'ahmed';
//   print_r($persons);

// echo $persons['gender'];

// $numOfArr = count($persons);

// for($i=0 ; $i< $numOfArr ; $i++){
//     echo $persons[''];
// }

// foreach($persons as $key=>$value){
//      echo  "the $key is : $value <br>";
// }







/**           Multi dimensions  array*/

// $students = [
// //  0     1   2
// ['ahmed',27,'mail'],  //0 
// ['malk',27,'mail'],   //1
// ['mohamed',27,'mail'],  //2
// ['ziad',27,'mail'],   //3


// ];
//print_r($students );
  
// print_r($students[0]);
//  echo  $students[2][0];

// $students=[
// //       0    1       2         3
// 'a'=> ['red','green','yellow','black'],
// 'b'=> ['red','orange','yellow','white'],
// 'c'=> ['brown','mentgreen','yellow','black'],
// 'd'=> ['teal','green','yellow','black'],

// ];

// echo $students['c'][1];
// echo $students['e']['name'];

// foreach($studen ts as $student => $value){
//     foreach($student as $k=>$v){
//         echo $k .":".$v;
//     }
// } 

// foreach($students as $student=>$value){
// // for($i =0 ; $i<count($value) ; $i++){
// // echo $student .":". $value[$i]."<br>" ;
// // }
// foreach($value as $v){
//    echo $v ."<br>";
// }

// }





// $students=[
// 'a'=> ['name'=> 'marwa' , 'age'=>25 , 'gender'=>'femail'],
// 'b'=> ['name'=> 'mona' , 'age'=>25 , 'gender'=>'femail'],
// 'c'=> ['name'=> 'tariq' , 'age'=>30 , 'gender'=>'mail'],
// 'd'=> ['name'=> 'ahmed' , 'age'=>20 , 'gender'=>'mail'],

// ];
// foreach($students as $key=>$value){
//      foreach($value as $k=>$v){
//           echo $k .":".$v."<br>";
//      }
// } 




/**            bassByValue     & reference       */

// $x =10;
// echo $x ."<br>" ;

// $y = &$x ;      //reference
// echo $y."<br>";

// $x = 20;

// echo $x ."<br>" ;  //20
// echo $y."<br>";   //10











//////////////////////////// FUNCTION ///////////////////////\


// function calc($rev=300 , $expen=10 ,$taxesRate=0.14 ,$otherEpe=2){



// $income = $rev-$expen;
// $incomeWithTaxes = $income*$taxesRate;
// $incomeAfterTaxes = $income-$incomeWithTaxes;
// $total = $incomeAfterTaxes-$otherEpe;
// echo $total;

// }

// calc(1000,10,0.14,20);
// echo "<br>";
// calc(2000,20,0.14,30);
// echo "<br>";
// calc(taxesRate:0.13);

// function sum($a=10,$b=20){
//     $result= $a+$b ;
//     echo $result;
// }
// sum(10,20);
// echo "<br>";
// sum(50,100);
// echo "<br>";
// sum(100,200);
// echo "<br>";
// sum(300,600);
// echo "<br>";
// sum();


// function greet($name){
//     echo "you are nivppp<br>";
//   return "Hello $name";

// }


// echo greet('marwa');



//////////////    scope  //////////////////////
 
/**  1-local    2-global  */
const NAME = "oneHour";   //Global
// define('x',20);
$x = 10;   //Global

function age(){
static $y = 10; 
   //local
    $y++;
    echo $y;
   global $x;
   echo  $GLOBALS['x'];
   echo $x;
echo NAME;
}
age();
echo "<br>";
age();
echo "<br>";
age();
// $name = "manar";

// print_r($GLOBALS);
// echo "<br>";
// echo  $GLOBALS['x'];
echo "<br>";
// print_r($GLOBALS);
echo $GLOBALS['x'];