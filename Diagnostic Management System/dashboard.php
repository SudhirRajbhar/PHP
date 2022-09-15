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
				<div class="col-md-9 display-4 ">WELCOME ADMIN</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
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
<li class="nav-item"><a href="transactionadmin.php" class="nav-link">Transaction</a></li>
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