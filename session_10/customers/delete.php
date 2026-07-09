<?php

require "dbc.php";

$id = $_GET['id'];

$query = "DELETE FROM coustomers WHERE id = $id";

$result = mysqli_query($connection,$query);

if($result){
    header('location:index.php');
    exit();
}