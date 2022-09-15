
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
		
		<div class="display-4 text-center">SCHEDULE FOR TESTS</div>
		</div>
<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid mt-4">
	<div class="row mt-4">
		<div class="col-md-4"></div>
		<div class="col-md-4 ">
<form action="schedule2.php" method="post">
			<TABLE class="table table-bordered table-hover">
				<?php include("operation.php");
				$obj=new operation();
				if (isset($_POST['bid'])) {
					$id=$_POST['bid'];
					$sql="select * from booking where bookingid='$id'";
					$r=$obj->view($sql);
				 ?>

<tr><th>Patient id</th>
	<td><input type="text" name="pid" value="<?php echo $r['pid']; ?>" class="form-control p-2"></td></tr>
	<tr><th>Date & Time</th>
	<td><input type="datetime-local" name="dt"  class="form-control p-2"></td></tr>
	<tr><th>Doctor id</th>
	<td>
		<select class="form-control" name="did">
			<?php 
			$sql="select * from doctor";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
 ?>
 <option value="<?php echo $r['did'] ?>"><?php echo $r['name'] ?></option>
<?php } ?>
		</select>

	</td></tr>
<tr><td colspan="2" class="text-center"><button type="submit" name="id" value="<?php echo $id; ?>" class="btn btn-outline-primary">CONFIRM</button></td></tr>
			</TABLE></form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php } ?>
</body>
</html>