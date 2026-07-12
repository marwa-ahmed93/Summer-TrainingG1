<?php
require "dbc.php";

// $data = json_decode(file_get_contents("php://input") , true);
// var_dump($data);
// die();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {



        $first_name =  $_POST['first_name'];
        $last_name =  $_POST['last_name'];
        $email =  $_POST['email'];
        $gender =  $_POST['gender'];
        $money =  $_POST['money'];
        $city =  $_POST['city'];
        $country =  $_POST['country'];
        $country_code =  $_POST['country_code'];

        $query = "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`money`,`city`,`country`,`country_code`)
         VALUES('$first_name','$last_name','$email','$gender','$money','$city','$country','$country_code')";
                 $result =  mysqli_query($connection, $query);
        //  if($result){
        //         echo json_encode(['message' => 'the data inserted successfully']);

        //  }
 




} else {
    echo json_encode(['message' => 'there message should be post']);
}
