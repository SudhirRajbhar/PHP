<?php 
include("operation.php");
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$sql="delete from doctor where did='$id'";
$obj=new operation();
if($obj->delete($sql))
{
	header("location:doc.php");
}
}

 ?>