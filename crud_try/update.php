<?php
include 'connect.php';
$id=$_GET['updateid'];

// For the Getting data in Display
$sql="SELECT * FROM crudo WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];



if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

 
  $sql="UPDATE crudo SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
                   //echo($sql);

  $result=mysqli_query($con,$sql);

  if($result){
    // echo "Updated successfully";
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
        <input type="text" class="form-control" placeholder="Enter your name"  name="name" autocomplete="off" value=<?php echo $name;?>>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email"  name="email" autocomplete="off" value=<?php echo $email;?>>
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your Mobile Number"  name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Enter your password"  name="password" autocomplete="off" value=<?php echo $password;?>>
      </div>

       <!-- for try to display in Update Form -->
      <!-- <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter your password"  name="password" autocomplete="off" value="1234">
      </div> -->


  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

   <div>
  </body>
</html>