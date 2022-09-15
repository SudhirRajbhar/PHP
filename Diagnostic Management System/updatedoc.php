
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
		
		<div class="display-4 text-center">DOCTOR DETAILS</div>
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid mt-4">
	<div class="row mt-4">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">
<form action="updatedoc2.php" method="post">
			<TABLE class="table table-bordered table-hover">
				<?php include("operation.php");
				$obj=new operation();
				if (isset($_POST['id'])) {
					$id=$_POST['id'];
					$sql="select * from doctor where did='$id'";
					$r=$obj->view($sql);
				} ?>

<tr><th>Name</th>
	<td><input type="text" name="name" value="<?php echo $r['name']; ?>" class="form-control p-2"></td></tr>
<tr><th>Email</th>
	<td><input type="text" name="email" value="<?php echo $r['email']; ?>" class="form-control p-2"></td></tr>
<tr><th>Mobile</th>
	<td><input type="text" name="mob" value="<?php echo $r['mob']; ?>" class="form-control p-2"></td></tr>
<tr><th>Password</th>
	<td><input type="text" name="pswd" value="<?php echo $r['pswd']; ?>" class="form-control p-2"></td></tr>
<tr><th>Qualification</th>
	<td><input type="text" name="qly" value="<?php echo $r['qly']; ?>" class="form-control p-2"></td></tr>
<tr><th>Experience</th>
	<td><input type="text" name="exp" value="<?php echo $r['exp']; ?>" class="form-control p-2"></td></tr>
</tr>
<tr><td colspan="2" class="text-center"><button type="submit" name="id" value="<?php echo $r['did']; ?>" class="btn btn-outline-primary">UPDATE</button></td></tr>
			</TABLE></form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</body>
</html>