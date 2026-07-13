<?php
require "dbc.php";

$data = json_decode(file_get_contents("php://input") , true);
// var_dump($data);
// die();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


// if(isset($data['first_name']) && !empty($data['first_name'])
//     && isset($data['last_name']) && !empty($data['last_name'])    
//     && isset($data['email']) && !empty($data['email'])    
//     && isset($data['gender']) && !empty($data['gender'])    
//     && isset($data['money']) && !empty($data['money'])    
//     && isset($data['city']) && !empty($data['city'])    
//     && isset($data['country']) && !empty($data['country'])    
//     && isset($data['country_code']) && !empty($data['country_code'])    
        
//         ){


        $first_name =  $data['first_name']??$_POST['first_name'];
        $last_name =  $data['last_name']??$_POST['last_name'];
        $email =  $data['email']??$_POST['email'];
        $gender =  $data['gender']??$_POST['gender'];
        $money =  $data['money']??$_POST['money'];
        $city =  $data['city']??$_POST['city'];
        $country =  $data['country']??$_POST['country'];
        $country_code =  $data['country_code']??$_POST['country_code'];



        $query = "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`money`,`city`,`country`,`country_code`)
         VALUES('$first_name','$last_name','$email','$gender','$money','$city','$country','$country_code')";
                 $result =  mysqli_query($connection, $query);
         if($result){
                echo json_encode(['message' => 'the data inserted successfully']);

         }
        //  else{
        //         echo json_encode(['message'=> 'you must send data']);
        //  }


        // }


      
 




} else {
    echo json_encode(['message' => 'there method should be post']);
}


















// $requiredFields = [
//     'first_name',
//     'last_name',
//     'email',
//     'gender',
//     'money',
//     'city',
//     'country',
//     'country_code'
// ];

// $missingFields = [];

// foreach ($requiredFields as $field) {
//     if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
//         $missingFields[] = $field;
//     }
// }

// if (!empty($missingFields)) {
//     echo json_encode([
//         'message' => 'Missing required fields',
//         'missing_fields' => $missingFields
//     ]);
//     exit;
// }




