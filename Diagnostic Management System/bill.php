<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<meta name="viewport" width="device-width" initial-scale='1'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid bg-dark" style="height:100%">
	<div class="row">
		<div class="col-md-2 mt-2">
			<a href="pthome.php"><button class="btn btn-outline-warning">BACK TO HOME</button></a>
		</div>
		
		<div class="col-md-9 "></div>
				<div class="col-md-1 mt-4">
					<button class="btn btn-outline-light" onclick="window.print()">PRINT</button>
				</div>
	</div>
<div class="row">
	<div class="col-md-12 mt-4">
		<div class="container mt-4 bg-light" style="width:100%;margin-bottom: 120px;">


	<?php 
	include"dbcon.php";
$sql="select max(bookingid) as mb from booking";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x))
{
	$bid=$r['mb'];
$sql2="select * from booking where bookingid='$bid'";
$y=mysqli_query($con,$sql2);
if ($s=mysqli_fetch_assoc($y)) {
session_start();
$_SESSION['pid']=$s['pid'];
$_SESSION['bid']=$bid;
$_SESSION['amount']=$s['amount'];
	?>
<table class="table table-borderless">
	<tr><th colspan="3"class="display-4">Public Diagnostic</th><td align="right">Invoice No : <?php echo $s['bookingid'] ?></td></tr>
		<tr><td colspan="4" align="right">Date : <?php echo $s['date'] ?></td></tr>
	<tr><th>Patient Name</th><td><?php echo $s['name'] ?></td>
		<th>Age</th><td><?php echo $s['age'] ?></td></tr>
		<tr><th>Gender</th><td><?php echo $s['gen'] ?></td>
			<th>Mobile</th><td><?php echo $s['mobile'] ?></td></tr>
</table>
<table class="table table-bordered">
	<tr><th>Tests</th><th width="200px">Amount</th></tr>
<?php 
$test1=$s['tests'];
$test2=explode(",", $test1);
$amount=0;
foreach ($test2 as $t ) {
	if ($t=="X-Ray") {
$total=500;
}
else if($t=="UltraSound")
{
	$total=700;
}
else if($t=="BloodTest")
{
	$total=400;
}
else if($t=="UrineTest")
{
	$total=600;
}
else if($t=="ECG")
{
	$total=1200;
}
else if($t=="MRI")
{
	$total=1500;
}
else
{
	$total=2500;
}
?>
<tr><td><?php echo $t ?></td><td><?php echo $total ?></td></tr>

<?php
}

$a=$s['amount'];
$sgst=($a*9)/100;
$cgst=$sgst;
$sum=$a+$sgst+$cgst;
$dis=($sum*10)/100;
$gt=$sum-$dis;
$_SESSION['gt']=$gt;
 ?>
<tr><th class="text-right">Total Amount</th><td><?php echo $a; ?></td></tr>
<tr><th class="text-right">SGST</th><td><?php echo $sgst ?> (9%)</td></tr>
<tr><th class="text-right">CGST</th><td><?php echo $cgst ?> (9%)</td></tr>
<tr><th class="text-right">Discount</th><td><?php echo $dis ?> (10%)</td></tr>
<tr><th class="text-right">Grand Total Amount</th><td><?php echo $gt ?></td></tr>
<tr><td colspan="2" class="text-center">Status : <code style="font-size: 20px"><?php echo$s['status'] ?></code></td></tr>

</table>
<a href="payment.php"><button class="btn btn-outline-dark mb-4">Proceed To Payment</button></a>

		</div>
	</div>
</div>	
</div>
<?php
}
}
?>	

</body>
</html>