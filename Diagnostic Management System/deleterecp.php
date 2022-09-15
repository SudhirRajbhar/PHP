<?php 
include("operation.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$sql="delete from reception where rid='$id'";
$obj=new operation();
if($obj->delete($sql))
{
	header("location:recp.php");
}
}

 ?>