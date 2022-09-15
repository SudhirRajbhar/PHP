<?php 
session_start();
include("dbcon.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gen=$_POST['gen'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
$address=$_POST['address'];
$sql1="update patient set name='$name',age='$age',gen='$gen',mobile='$mob',email='$email',address='$address' where pid='$id'";
$sql2="update p_login set email='$email',mob='$mob' where pid='$id'";
if ((mysqli_query($con,$sql1)) && (mysqli_query($con,$sql2))) {
	setcookie("success_msg","Successfully Updated",time()+60);
}
else 
{
	setcookie("error_msg","Problem in Updation",time()+60);
}
}


if (!empty($_SESSION['email']) || !empty($_SESSION['mob'])) {
	$email=$_SESSION['email'];
	$mob=$_SESSION['mob'];
	
$sql="select * from patient where email='$email' or mobile='$mob'";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x))
{
?>	


<!DOCTYPE html>
<html>
<head>
	<title>Change Password Patient</title>
	<meta charset="utf-8">
<meta name="viewport" width="device-width" initial-scale='1'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6">
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
			<div class="col-md-3">
				<a href="pthome.php" class="btn btn-warning">Back</a>
			</div>
</div>
<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="" method="post">
	    	<fieldset class="border p-4">
	    		<legend class="w-auto p-2">Update Details</legend>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $r['name']?>"  class="form-control">
</div>
<div class="form-group">
	<label>Age</label>
	<input type="number" name="age" value="<?php echo $r['age']?>"  class="form-control">
</div>
<div class="form-group">
	<label class="mr-4">Gender</label>
	MALE &nbsp;<input type="radio"class="mr-4" name="gen" value="Male">
	FEMALE&nbsp;<input type="radio"class="mr-4" name="gen" value="Female">
	OTHER&nbsp;<input type="radio"class="mr-4" name="gen" value="Other">
</div>
<div class="form-group">
	<label>Mobile</label>
	<input type="text" name="mob" value="<?php echo $r['mobile']?>" class="form-control">
</div>
<div class="form-group">
	<label>Email Id</label>
	<input type="email" name="email"value="<?php echo $r['email']?>"  class="form-control">
</div>
<div class="form-group">
	<label>Address</label>
	<textarea name="address"  class="form-control">
		<?php echo $r['name']?>
	</textarea> 
</div>
<div class="form-group text-center">
	<button type="submit" name="id" value="<?php echo $r['pid']; ?>" class="btn btn-info ">UPDATE</button>
	<button type="reset" class="btn btn-warning">CLEAR</button>
</div>


	    	</fieldset>
	    	</form>
	
		</div>
			<div class="col-md-3"></div>
</div>
<?php	
}}
?>
</body>
</html>
