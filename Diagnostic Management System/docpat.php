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
	<tr class="bg-dark text-light"><th>Token Id</th><th>Booking Id</th><th>Patient Id</th><th>Date Time</th><th>Status</th><th>Action</th>
	</tr>
	<?php 
include("operation.php");

$obj=new operation();
$id=$_SESSION['did'];
$sql="select * from schedule where did=$id and sstatus='untested'";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['tokenid'] ?></td><td><?php echo $r['bookingid'] ?></td><td><?php echo $r['pid'] ?></td>
<td><?php echo $r['datetime'] ?></td>
<td><?php echo $r['sstatus'] ?></td>
<td><form action="checking.php" method="post"><button class="btn btn-outline-primary" name="bid" value="<?php echo $r['bookingid'] ?>">CHECKING</button></form></td>
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