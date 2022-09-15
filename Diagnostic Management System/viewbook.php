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
<li class="nav-item"><a href="doc.php" class="nav-link">Doctor</a></li>
<li class="nav-item"><a href="recp.php"class="nav-link">Receptionist</a></li>
<li class="nav-item"><a href="pat.php" class="nav-link">Patient</a></li>
<li class="nav-item"><a href="test.php" class="nav-link">Tests</a></li>
<li class="nav-item"><a href="transaction.php" class="nav-link">Transaction</a></li>
		</ul>

		</div>
<div class="col-md-8 p-4">
<table class="table table-hover table-bordered">
	<tr><td colspan="8"class="text-right"><form method="post" class="form-inline "><input type="text" name="pid" placeholder="Enter patient Id" class="form-control">&nbsp;<button type="submit" class="btn btn-outline-primary">Search</button></form></td></tr>
	<tr class="bg-dark text-light"><th>Booking Id</th><th>Patient Id</th><th>Date</th><th>Name</th><th>Age</th><th>Gender</th><th>tests</th><th>Status</th>
	</tr>
	<?php 
include("operation.php");
if (isset($_POST['pid'])) {
	$id=$_POST['pid'];

$obj=new operation();
$sql="select * from booking where pid=$id";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['bookingid'] ?></td><td><?php echo $r['pid'] ?></td>
<td><?php echo $r['date'] ?></td><td><?php echo $r['name'] ?></td>

<td><?php echo $r['age'] ?></td><td><?php echo $r['gen'] ?></td>

<td><?php echo $r['tests'] ?></td><td><?php echo $r['status'] ?></td>
</tr>
<?php
}	} ?>


</table>

			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>