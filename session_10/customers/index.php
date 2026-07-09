<?php

require "dbc.php";

  $query = 
  "SELECT * FROM `coustomers`ORDER BY id DESC" ;

 $result = 
  mysqli_query($connection, $query);
  
//  $customers =
//   mysqli_fetch_all($result,MYSQLI_ASSOC);
        //  echo "<pre>";
        //  print_r($data);
     //   $customers = mysqli_fetch_all($result,MYSQLI_ASSOC);
// $customer=  mysqli_fetch_assoc($result);
// print_r($customer);
// die();
         ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<!-- <div class="d-flex justify-content-center my-3"> -->
    <a href="from.php" class="btn btn-primary m-2">Create</a>
<!-- </div> -->
<table class="table table-dark table-striped">
<thead>
    <th>index</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>email</th>
    <th>gender</th>
    <th>money</th>
    <th>city</th>
    <th>country</th>
    <th>country_code</th>
    <th>Update</th>
    <th>Delete</th>
</thead>  



<tbody>
<?php
$i = 1;
// foreach($customers as $customer){
    while($row =  mysqli_fetch_assoc($result)){
    
    ?>
    <tr>
        <td><?php echo $i++ ?></td>
     <td><?php echo $row['first_name'] ;?> </td>
     <td><?= $row['last_name'] ;?> </td>
     <td><?= $row['email'] ;?> </td>
     <td><?= $row['gender'] ;?> </td>
     <td><?= $row['money'] ;?> </td>
     <td><?= $row['city'] ;?> </td>
     <td><?= $row['country'] ;?> </td>
     <td><?= $row['country_code'] ;?> </td>
   
     <th><a href="updateForm.php" class="btn btn-success">Update</a></th>
   <td><a href="delete.php?id=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>

    </tr>
<?php } ?>

</tbody>

</table>

</body>
</html>



