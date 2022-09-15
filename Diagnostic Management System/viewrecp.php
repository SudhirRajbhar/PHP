
<!DOCTYPE html>
<html>
<head>
	<title>View Doctor</title>
	<?php include"externalfiles.php"; ?>
</head>
<body class="bg-light">
<div class="container-fluid">
	<div class="row mt-4">
		<div class="col-md-10"></div>
<div class="col-md-2">
	<a href="doc.php"><button class="btn btn-outline-primary">BACK</button></a>

</div>
	</div>
	<hr>
</div>
<div class="container-fluid mb-4">
	<div class="row ">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		
		<div class="display-4 text-center">RECEPTIONIST DETAILS</div>
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid mt-4">
	<div class="row mt-4">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">

			<TABLE class="table table-bordered table-hover">
				<?php include("operation.php");
				$obj=new operation();
				if (isset($_POST['id'])) {
					$id=$_POST['id'];
					$sql="select * from reception where rid='$id'";
					$r=$obj->view($sql);
				} ?>

<tr><th>Name</th><td><?php echo $r['name']; ?></td></tr>
<tr><th>Email</th><td><?php echo $r['email']; ?></td></tr>
<tr><th>Mobile</th><td><?php echo $r['mob']; ?></td></tr>
<tr><th>Password</th><td><?php echo $r['pswd']; ?></td></tr>
<tr><th>Qualification</th><td><?php echo $r['qly']; ?></td></tr>
<tr><th>Experience</th><td><?php echo $r['exp']; ?></td></tr>

				</tr>
			</TABLE>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>