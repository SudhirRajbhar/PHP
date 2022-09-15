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
<div class="col-md-8 p-4">	
<table class="table table-hover table-striped table-borderless">
	<tr><th>Bill Id</th><th>Booking Id</th>
		<th>Card type</th><th>Card No.</th><th>Name on Card</th><th>Amount</th>
		<?php
include("operation.php");
		 $obj=new operation();
	$sql2="select * from transaction";
	$p=$obj->selectall($sql2);
	while($a=$p->fetch_assoc())
	{ ?>
	</tr>
	<tr><td><?php echo $a['billid'] ?></td>
<td><?php echo $a['bookingid'] ?></td>
<td><?php echo $a['ctype'] ?></td>
<td><?php echo $a['cno'] ?></td>
<td><?php echo $a['name'] ?></td>
<td><?php echo $a['amount'] ?></td>
	</tr>
<?php } ?>
</table>





			</div>
		
			<div class="col-md-1"></div>
	</div>
</div>

</body>
</html>

