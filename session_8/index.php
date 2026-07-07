<?php

/**Filter
 * filter-input
 * filter-var
 */


// $email = "marwa@gmail.com";
// echo filter_var($email,FILTER_SANITIZE_EMAIL);

// $num=20;

// echo filter_var($num , FILTER_VALIDATE_INT ,
// ['options'=> [
//     'min_range'=>16 ,
//      'max_range'=>25
//      ]
// ]); 


// $userName = "Mona mohamed";

// echo filter_var($userName, FILTER_VALIDATE_REGEXP,
// ['options'=> ['regexp'=>'/^[A-Z][a-z]{3,8}$/']  ]);
echo "<pre>";
print_r($_SERVER);

session_start();

include('validate.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

$errors = [];

foreach($validates as $validate_name => $validate_value){
 $value = filter_input(INPUT_POST,$validate_name,$validate_value['filters'] ,
 $validate_value['my_options'] ?? null);


if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must fill $validate_name";
}
elseif($value == false){
    $errors[$validate_name] = $validate_value['error'];
}


}

// After the loop
if ($errors) {
    $_SESSION['error'] = $errors;
    header("Location: loginForm.php");
    exit();
}

// No errors → redirect to welcome page
// header("Location: welcome.php");
// exit();


$_SESSION['user'] = $_POST['userName'];
header("Location: welcome.php");
exit();

}