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
<li class="nav-item"><a href="bookrecp.php" class="nav-link">Bookings</a></li>
<li class="nav-item"><a href="testrecp.php" class="nav-link">Tests/Schedule</a></li>
<li class="nav-item"><a href="transactionrecp.php" class="nav-link">Transaction</a></li>
<li class="nav-item"><a href="rchangepswd.php" class="nav-link">Change Password</a></li>
		</ul>

		</div>
<div class="col-md-8 p-4">
<table class="table table-hover table-bordered">
	<tr class="bg-dark text-light"><th>Token Id</th><th>Booking Id</th><th>Patient Id</th><th>Doctor Id</th><th>Date</th><th>Name</th><th>Age</th><th>Gender</th><th>tests</th>
	</tr>
	<?php 
include("operation.php");

$obj=new operation();
$sql="SELECT * FROM booking b INNER JOIN schedule s ON b.bookingid=s.bookingid where sstatus='untested'";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['tokenid'] ?></td><td><?php echo $r['bookingid'] ?></td><td><?php echo $r['pid'] ?></td>
	<td><?php echo $r['did'] ?></td>
<td><?php echo $r['datetime'] ?></td><td><?php echo $r['name'] ?></td>

<td><?php echo $r['age'] ?></td><td><?php echo $r['gen'] ?></td>

<td><?php echo $r['tests'] ?></td>

</tr>
<?php
}	 ?>


</table>

			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>