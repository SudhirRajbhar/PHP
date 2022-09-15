<?php 
require('dbcon.php');
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gen=$_POST['gen'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	$address=$_POST['address'];
$sql="insert into patient(name,age,gen,mobile,email,address,pswd)values('$name',$age,'$gen',$mob,'$email','$address','$pswd')";
if(mysqli_query($con,$sql))
{
	$sql1="insert into p_login(email,mob,pswd,status)values('$email','$mob','$pswd','active')";
	if (mysqli_query($con,$sql1)) {
	session_start();
$_SESSION['signup_msg']="Dear ".$name.", Your SignUp Process Completed Successfully. Let's Proceed after Login";
header("location:patient.php");
	}
	else {
		header("location:patient.php");
	setcookie("error_msg","Something Went Wrong",time()+60);

	}
}

}


 ?>