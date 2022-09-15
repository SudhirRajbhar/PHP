<?php 
require("dbcon.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
$email=$_POST['email'];
$mob=$_POST['mob'];
$pswd=$_POST['pswd'];

$sql="select * from p_login where email='$email' or mob='$mob'";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x))
{
	$dbpswd=$r['pswd'];
if ($dbpswd==$pswd) {
header("location:pthome.php");
session_start();
$_SESSION['email']=$email;
$_SESSION['mob']=$mob;
}
else
{
	header("location:patient.php");
	setcookie("error_msg","Invalid Password",time()+60);
}

}
else {
header("location:patient.php");
	setcookie("error_msg","Invalid Email or Mobile No",time()+60);
}

}
 ?>