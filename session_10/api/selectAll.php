<?php

require "dbc.php"; 
header('content-type:application/json');
 $quey = "SELECT * FROM `coustomers`";
 $result =  mysqli_query($connection , $quey);

$customers =   mysqli_fetch_all($result,MYSQLI_ASSOC);
// echo "<pre>";
echo json_encode($customers) ;