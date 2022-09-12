<!-- Database: operation
     Table: crudo         -->

<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

 
  $sql="INSERT INTO crudo (name,email,mobile,password) 
                   VALUES('$name','$email','$mobile','$password')";
                  //  echo($sql);

  $result=mysqli_query($con,$sql);

  if($result){
    // echo "Data inserted successfully";
    header('location:display.php');  //header is used for data Redirected  in Display.php table
  }else{
    die(mysqli_error($con));

  }
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
   <div class="container my-5">

    <form method="post">

      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name"  name="name" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email"  name="email" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your Mobile Number"  name="mobile" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter your password"  name="password" autocomplete="off">
      </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

   <div>
  </body>
</html>