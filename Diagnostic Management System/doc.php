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
				<div class="col-md-9 display-4 ">DOCTORS</div>
		<div class="col-md-2">
			<form action="logout.php"><button class="btn btn-outline-warning">LOGOUT</button></form>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php 
if(!empty($_COOKIE['deleted']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['deleted']; ?>
</div>

<?php } ?>
		<?php 
if(!empty($_COOKIE['update']))
{
 ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['update']; ?>
</div>

<?php } ?>
		
		<?php 
if(!empty($_COOKIE['login_error']))
{
 ?>
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert"
	name="button">&times;</button>
<?php echo $_COOKIE['login_error']; ?>
</div>

<?php } ?>
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
	<tr><td colspan="8"class="text-right"><a href="adddoc.php"><button class="btn btn-outline-primary">ADD DOCTOR</button></a></td></tr>
	<tr class="bg-dark text-light"><th>Doctor Name</th><th>Email</th><th>Mobile</th><th colspan="3" class="text-center">Action</th>
	</tr>
	<?php 
include("operation.php");
$obj=new operation();
$sql="select * from doctor";
$x=$obj->selectall($sql);
while($r=$x->fetch_assoc())
{
?>
<tr><td><?php echo $r['name'] ?></td>
<td><?php echo $r['email'] ?></td><td><?php echo $r['mob'] ?></td>
<td><form action="viewdoc.php" method="post"><button type="submit" name="id" value="<?php echo $r['did'] ?>"class="btn btn-outline-info">VIEW</button></form></td>

<td><form action="updatedoc.php" method="post"><button type="submit" name="id" value="<?php echo $r['did'] ?>"class="btn btn-outline-success">UPDATE</button></form></td>

<td><form action="deletedoc.php" method="post"><button type="submit" name="id" value="<?php echo $r['did'] ?>"class="btn btn-outline-danger">DELETE</button></form></td>

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