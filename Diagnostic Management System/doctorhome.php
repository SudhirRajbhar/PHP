<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php include("externalfiles.php"); ?>
<style type="text/css">
	a:hover{
text-decoration:none;
	}


</style>
</head>
<body>
<div class="container-fluid mt-4">
	<div class="row">
		<div class="col-md-1"></div>
				<div class="col-md-9 display-4 text-uppercase">WELCOME DOCTOR <?php
include("operation.php");
				 if (!empty($_SESSION['email']) or !empty($_SESSION['mob'])) {
					$email=$_SESSION['email'];	$mob=$_SESSION['mob'];
	$sql="select * from doctor where email='$email' or mob='$mob'";
	
	$obj=new operation();
	$r=$obj->view($sql);
	$id=$r['did'];
	$_SESSION['did']=$id;
	echo $r['name'];
				} ?></div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
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
<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-primary text-light text-center pt-4 ">
				<h1>No Of Patients : 40</h1>
			</div></a>
		</div>
			<div class="col-md-4 p-4">
			<a href="#"><div style="height:100%;width:100%"class="bg-info text-light text-center pt-4">
				<h1>No Of Tests :50</h1>
			</div></a>	
			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>