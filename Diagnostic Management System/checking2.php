<?php 
include("operation.php");
$obj=new operation();
if (isset($_POST['id'])) {
	echo $bid=$_POST['id'];
	echo $name=$_POST['name'];
	echo $email=$_POST['email'];
	echo $mob=$_POST['mob'];
	echo $tests=$_POST['tests'];
	$sq="select * from schedule where bookingid=$bid";
$r=$obj->view($sq);
echo $tokenid=$r['tokenid'];
echo $pid=$r['pid'];
echo $did=$r['did'];
echo $dt=$r['datetime'];
$sql1="insert into tested(tokenid,bookingid,pid,did,datetime,name,email,mob,tests)values($tokenid,$bid,$pid,$did,'$dt','$name','$email','$mob','$tests')";
echo "ok";
$sql="update schedule set sstatus='tested' where tokenid=$tokenid";
echo "ok";
if($obj->update($sql) )
{
if ($obj->signup($sql1)) {
	echo signup;
}
	echo "ok";
	setcookie("checked","Patient Checked ",time()+60);
	header("location:docpat.php");
}
}


 ?>