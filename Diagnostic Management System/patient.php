<!DOCTYPE html>
<html>
<head>
	<title>Patient Signup/Signin</title>
	<meta charset="utf-8">
<meta name="viewport" width="device-width" initial-scale='1'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
	<div class="display-4 text-success">Patient SignUp/SignIn</div>
			</div>
			<div class="col-md-2 mt-4 text-center">
		<a href="index.php"><button class="btn btn-primary">Back To Home</button></a>
	</div>
	
		</div>
	</div>



		<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php session_start();
if(!empty($_SESSION['signup_msg']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_SESSION['signup_msg']; ?>
</div>

<?php } ?>
		</div>
			<div class="col-md-2"></div>
</div>
<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php 
if(!empty($_COOKIE['error_msg']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['error_msg']; ?>
</div>

<?php } ?>
		</div>
			<div class="col-md-2"></div>
</div>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
	    <div class="col-md-4">
	    	<form action="signup.php" method="post">
	    	<fieldset class="border p-4">
	    		<legend class="w-auto p-2">SignUp</legend>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
</div>
<div class="form-group">
	<label>Age</label>
	<input type="number" name="age" placeholder="Years" class="form-control">
</div>
<div class="form-group">
	<label class="mr-4">Gender</label>
	 <br>
	MALE &nbsp;<input type="radio"class="mr-4" name="gen" value="Male">
	FEMALE&nbsp;<input type="radio"class="mr-4" name="gen" value="Female">
	OTHER&nbsp;<input type="radio"class="mr-4" name="gen" value="Other">
</div>
<div class="form-group">
	<label>Mobile</label>
	<input type="text" name="mob" placeholder="Enter Your Mobile Number" class="form-control">
</div>
<div class="form-group">
	<label>Email Id</label>
	<input type="email" name="email" placeholder="Enter Your Email Id" class="form-control">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" name="pswd" placeholder=" " class="form-control">
</div>
<div class="form-group">
	<label>Address</label>
	<textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea> 
</div>



<div class="form-group text-center">
	<button type="submit" name="submit" class="btn btn-info ">SIGNUP</button>
	<button type="reset" class="btn btn-warning">CLEAR</button>
</div>
	    	</fieldset>
	    	</form>
	    </div>
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<form action="signin.php" method="post">
	    	<fieldset class="border p-4">
	    		<legend class="w-auto p-2">SignIn</legend>
<div class="form-group">
	<label>Mobile</label>
	<input type="text" name="mob" placeholder="Enter Your Mobile Number" class="form-control">
</div>
<div class="form-group text-center">
	<h2>Or</h2>
</div>
<div class="form-group">
	<label>Email Id</label>
	<input type="email" name="email" placeholder="Enter Your Email Id" class="form-control">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" name="pswd" placeholder=" " class="form-control">
</div>
<div class="form-group text-center">
	<button type="submit" class="btn btn-success ">SIGNIN</button>
	<button type="reset" class="btn btn-warning">CLEAR</button>
</div>
	    	</fieldset>
	    	</form>

		</div>
		<div class="col-md-1"></div>
	</div>
</div>
</body>
</html>