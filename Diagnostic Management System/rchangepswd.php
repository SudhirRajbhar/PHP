<?php 
session_start();
include("dbcon.php");
if (!empty($_SESSION['email']) || !empty($_SESSION['mob'])) {
	$email=$_SESSION['email'];
	$mob=$_SESSION['mob'];
	if (isset($_POST['submit'])) {
		 $op=$_POST['op'];
		$np=$_POST['np'];
		$cp=$_POST['cp'];
$sql="select * from reception where email='$email' or mob='$mob'";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x))
{
	$dbop=$r['pswd'];
	if ($dbop==$op) {
		if ($np==$cp) {
		$sql1="update reception set pswd='$np' where email='$email' or mob='$mob'";
		if (mysqli_query($con,$sql1)) {
header("location:receptionhome.php");
		}
		else {
			setcookie("error_msg","Something Went Wrong",time()+60);
}
		}
		else {
			setcookie("error_msg","New & Confirm Password Does Not Match",time()+60);
		}
	}
	else 
	{
		setcookie("error_msg","Old Password Does Not Match",time()+60);
	}

}}}
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
			<a href="receptionhome.php" class="btn btn-warning">Back</a>
			</div>
</div>
<div class="row mt-4">
	<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="" method="post">
	    	<fieldset class="border p-4">
	    		<legend class="w-auto p-2">Change Password</legend>
<div class="form-group">
	<label>Old Password</label>
	<input type="password" name="op" placeholder="Enter Old Password" class="form-control">
</div>
<div class="form-group">
	<label>New Password</label>
	<input type="password" name="np" placeholder="Enter New Password" class="form-control">
</div>
<div class="form-group">
	<label>Confirm Password</label>
	<input type="password" name="cp" placeholder="Enter Confirm Password" class="form-control">
</div>
<div class="form-group text-center">
	<button type="submit" class="btn btn-success " name="submit">CHANGE</button>
	<button type="reset" class="btn btn-warning">CLEAR</button>
</div>
	    	</fieldset>
	    	</form>
	
		</div>
			<div class="col-md-3"></div>
</div>

</body>
</html>
