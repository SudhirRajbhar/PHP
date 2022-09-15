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
	<tr><td colspan="8"class="text-right"><a href="viewbook.php"><button class="btn btn-outline-primary">VIEW BOOKING</button></a></td></tr>
	<tr class="bg-dark text-light"><th>Id</th><th>Patient Name</th><th>Email</th><th>Mobile</th><th>Age</th><th>Gender</th><th>Address</th>
	</tr>
	<?php 
include("operation.php");
$obj=new operation();
$sql="select * from patient";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['pid'] ?></td><td><?php echo $r['name'] ?></td>
<td><?php echo $r['email'] ?></td><td><?php echo $r['mobile'] ?></td>

<td><?php echo $r['age'] ?></td><td><?php echo $r['gen'] ?></td>

<td><?php echo $r['address'] ?></td>
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