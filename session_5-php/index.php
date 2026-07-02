<?php



// echo "Hello world " ;
// echo "<br>";
// echo "Hello world" ;

// echo "marw";
// echo "<br>";
// echo "marw";
// echo "<br>";
// echo "marwa";
// echo "<br>";
// echo "marwa";
// echo "<br>";
// echo "marwa";
// echo "<br>";
// echo "marwa";
// echo "<br>";

//echo 5+5 ;  //10

//variables
//data type

/**
 * number   $age=20
 * string   $name = "ahmed"
 * float     $mony=15.5
 * boolean   $active =true
 * array     $color =[]
 * object    $cat={}
 * null
 * 
 */

// int x = 'mm' ;  

// $name = "welcome";
// $name = 5 ;
// echo  gettype($name)  ;



//////////////////////////////
/**casting 
 *1- automatic
 2-manual
 */

// $number  = "5" + 5 ;

// echo $number;

// $number = (int) "marwa" + 5 ;  //0+5 => 5
//  echo $number;

// $number  = "5". 5  ;   //55

// echo $number;


// $number = (int) 5.5 + 5 ;
// echo $number;

 //echo "hello  <br> in" ;

/////////////////////////////////////////////
//if


// $x = "John";
// echo 'Hello '.$x;




// if($age  >18 ){
//     echo "you can register";
// }

// else{
//       echo "Sorry you can`t register";  
// }

//  $age = 18 ;
// $gender = "male";

// if($gender == 'male'){

// }
// elseif($gender == 'female'){

// }
// if($age >18){

//     if($gender == 'female'){

//     }
// }



// if($age  >= 18 ){
//     echo "you can register";
// }

// else{
//       echo "Sorry you can`t register";  
// }

// echo  $age  >18 ? "you can register" : "Sorry you can`t register" ;


// if(' '){   //true
// echo "welcome";
// }


// if(""){   //false
// echo "welcome";
// }

// if(0){   //false
// echo "welcome";
// }




// $a = 13;

// if ($a > 10) {
//   echo "Above 10";
//   if ($a > 20) {
//     echo " and also above 20";
//   } else {
//     echo " but not above 20";
//   }
// }


// $x = 11 ;  //integer      value 10
// $y = 10;  // string    value   10

// if($x == $y){
//     echo "equal";
// }

// else{
//         echo "not equal";

// }


// if($x != $y){
//     echo "yes ";
// }

// else{
//         echo "no ";

// }

// if($x === $y){
//     echo "equal";
// }

// else{
//         echo "not equal";

// }



// $a = 200;
// $b = 33;
// $c = 500;

// if ($a > $b and  $a < $c ) {
//   echo "Both conditions are true";
// }



// $a = 5;
// //    false  ||  false ||   false  ||  true ||   false  ||   false
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }



/**switch */

$day = 10;
if ($day == 1) {
    echo "saturday";
} elseif ($day == 2) {
    echo "sunday";
} elseif ($day == 3) {
    echo "monday";
}

// switch ($day) {
//     case 1:
//         echo "saturday";
//         break;


//        case 2:
//         echo "sunday";
//         break;

//         case 3:
//         echo "monday";
//          break;

//         default:
//         echo "not found";
// }
//DRY

$fruit = "carrot";

switch($fruit){

  case "apple":
  case "orange":
    echo "this is a fruit";
    break;

     case "carrot":
     case "tomato":
    echo "this is a vegetable";
    break;

    default:
    echo "not ";

}