<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['submit'])) {
	$rid=$_POST['submit'];
 $photo=basename($_FILES['report']['name']);
$folder="images";


move_uploaded_file($_FILES['report']['tmp_name'],"images/".basename($_FILES['report']['name']));
$sql="update tested set report='$photo',dstatus='uploaded' where reportid='$rid'";
$obj->pic($sql);

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php include("externalfiles.php") ?>
</head>
<body>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-1"></div>
				<div class="col-md-9 display-4 ">PATIENTS</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
	<?php 
if(!empty($_COOKIE['report']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['report']; ?>
</div>

<?php } ?>
</div>
<div class="col-md-2"></div>
	</div>
</div>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-tabs flex-column text-center">
<li class="nav-item"><a href="docpat.php" class="nav-link">Patient</a></li>
<li class="nav-item"><a href="docreport.php" class="nav-link">Reports</a></li>
<li class="nav-item"><a href="dchangepswd.php" class="nav-link">Change Password</a></li>
		</ul>

		</div>
<div class="col-md-8 p-4">
<table class="table table-hover table-bordered">
	<tr class="bg-dark text-light"><th>Report Id</th><th>Token Id</th><th>Patient Name</th><th>Mobile</th><th width="100px">Tests</th><th>Upload Report</th>
	</tr>
	<?php 
$id=$_SESSION['did'];
$sql="select * from tested where dstatus='undelivered' and did=$id";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['reportid'] ?></td><td><?php echo $r['tokenid'] ?></td>

<td><?php echo $r['name'] ?></td>
<td><?php echo $r['mob'] ?></td>
<td><?php echo $r['tests'] ?></td>
<td><form action="" method="post" enctype="multipart/form-data" class="text-center">
<input type="file" name="report" class="form-control">
	<button class="btn btn-outline-primary btn-sm" name="submit" value="<?php echo $r['reportid'] ?>">Add Report</button></form></td>
</tr>
<?php
}	?>


</table>

			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>