<?php 
include("operation.php");
$obj=new operation();
echo "ok";
if (isset($_POST['id'])) {
	echo "ok";
	echo $bid=$_POST['id'];
	echo $pid=$_POST['pid'];
	echo $did=$_POST['did'];
	echo $dt=$_POST['dt'];
	$sq="insert into schedule(bookingid,pid,did,datetime) values($bid,$pid,$did,'$dt')";
$sql="update booking set schedule=1 where bookingid=$bid";
if($obj->update($sql) && $obj->signup($sq))
{
	header("location:bookrecp.php");
}
}


 ?>