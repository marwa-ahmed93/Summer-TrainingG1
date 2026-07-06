<?php

// print_r($GLOBALS);

// echo $_GET['email'];
// echo "<br>";
// echo $_GET['password'];





// if(isset($_POST['submit'])){
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['password'];
// }
// else{
//     echo "please login first";
// }


// $arr=[
//     'email' => "marwa@gmail.com",
//     'password' => '123456'
// ];

// if(isset($_POST['submit'])){

//    $email =  $_POST['email'] ; 
//    $password =  $_POST['password'];

//    if($email == $arr['email']   && $password == $arr['password'] ){
//     echo "Welcome ";
//    }
//    else{
//     echo "invalid data";
//    }


// }



// if(isset($_POST['submit'])){

// $num_1 = $_POST['num1'];
// $num_2 = $_POST['num2'];

// $operators = $_POST['operators'];

// switch($operators){

// case '+':
//   echo $num_1 + $num_2;
//   break;  


// case '-':
//   echo $num_1 - $num_2;
//   break;  


//   case '/':
//   echo $num_1 / $num_2;
//   break;  

//   case '*':
//   echo $num_1 * $num_2;
//   break;  

// default:
// echo "invalid number";

// }

// }


// $userName =  $_POST['name'];
// $password = $_POST['password'];

// setcookie('username',$userName , time()+60*60);

// echo $_COOKIE['username'];




// if(isset($_POST['submit'])){

// $userName =  $_POST['name'];
// $password = $_POST['password'];

// if(isset($_POST['rememberMe'])
//  && $_POST['rememberMe'] == true )
// {

//      setcookie('username',$userName , time()+60*60);
//      setcookie('password',$password , time()+60*60);
// }
  
//  echo "welcome $userName";

// }




/*******SESSION******* */
// session_start();


// if(isset($_POST['submit'])){

// $userName =  $_POST['name'];
// $password = $_POST['password'];

// $_SESSION['username'] = $userName;
// $_SESSION['password'] = $password;

// print_r($_SESSION);

// }


/**
 *    session
 * 1-write php script to store username in a session and display it in another page
 * 2-make login page store the username in the session and display welcome message in another page
 * 3-make logout button that destroy the session
 * 
 *   cookie
 * 1-write php script that set a cookie named user with a value and 1 hour expire
 * 2-show message welcome back , user if cookie exist and it not set welcome user for the firstname user
 * 3-make remember me login page
 */



// ex-1

// session_start();


// if(isset($_POST['submit'])){

// $userName =  $_POST['name'];
// $password = $_POST['password'];

// $_SESSION['username'] = $userName;
// $_SESSION['password'] = $password;

// header('location:welcome.php');



// }





// echo "<pre>";
// print_r($_SERVER);
session_start();
// if($_SERVER['REQUEST_METHOD'] == 'POST'){

//    $userName =  $_POST['name'];
//    $password = $_POST['password'];  

//    $errors = [];

//    if(strlen($userName) < 6  || strlen($userName) > 12){

//      $errors[] = "The user name should be between 6 and 12";

//    }
//   if(strlen($password) < 6  || strlen($password) > 12){

//      $errors[] = "The user password should be between 6 and 12";

//    }

// if($errors){
//      $_SESSION['errors'] = $errors ;
//      header('location:home.php');
//      exit();
// }

// $_SESSION['username']= $userName ;
// header('location:welcome.php');

// }
echo "<pre>";
print_r($_FILES);  

/**
 * $files = ['image'  => ['name' => '1.jpg' , 'full_path'=> ' 1.jpg']         ] 
 * $file['image']['name']
*/


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$image = $_FILES['image'] ;
$imgName = $image['name'];
$temName = $image['tmp_name'];

$ext = pathinfo($imgName,PATHINFO_EXTENSION);

$newName = uniqid().".".$ext;
move_uploaded_file($temName  ,$newName );
?>
<img src="<?php echo $newName ?>" alt="">
<?php

}
?>