<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['id'])) {
	$did=$_POST['id'];
	$dname=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$qly=$_POST['qly'];
	$exp=$_POST['exp'];
    $pswd=$_POST['pswd'];
$sql="update reception set name='$dname',email='$email',mob='$mob',qly='$qly',exp='$exp',pswd='$pswd' where did=$did";
if($obj->update($sql))
{
	header("location:recp.php");
}
}


 ?>