<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    





<!-- <form class="w-75 m-auto mt-4" action="index.php" method="post" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
</form> -->






<!-- <form class="w-75 m-auto mt-4" action="index.php" method="post" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Number</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second Number</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>


    <div class="mb-3" >
    <label for="exampleInputPassword1" class="form-label">Select Operators</label>
  
        <select class="form-control" name="operators" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>

  </div>


  <button type="submit" name="submit" class="btn btn-primary">submit</button>
</form> -->




<?php 
 session_start();
if(isset($_SESSION['errors'])){

foreach($_SESSION['errors'] as $error){

  ?>

  
  <div class="alert alert-danger w-75 m-auto mt-3">  

<?php   echo $error ;  ?>
  </div>


  <?php

}
   unset($_SESSION['errors']);
}

?>



 <!-- <form class="w-75 m-auto mt-4" action="index.php" method="post" >

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="name" 
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ; ?>" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
     value="<?php if(isset($_COOKIE['password']))  echo $_COOKIE['password'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" name="rememberMe" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">remember me </label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
</form>  -->




 <form class="w-75 m-auto mt-4" action="index.php?username=marwa" method="post" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload  image</label>
    <input type="file" name="image" 
    value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ; ?>" class="form-control" id="exampleInputEmail1" >
  </div>



  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
</form> 





<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>