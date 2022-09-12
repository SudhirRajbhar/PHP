<?php

/*
$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if ($j==$i) {
			echo " * ";
		} else{
			echo " 0 ";
		}
}
echo "</br>";
}
*/


/*
$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if ($j==$i) {
			echo " * ";
		} else{
			echo "&nbsp;&nbsp;&nbsp;";
		}
}
echo "</br>";
}
*/

/*
$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if ($j==$i || $i+$j==$n+1) {
			echo " * ";
		} else{
			echo " &nbsp;&nbsp;&nbsp; ";
		}
}
echo "</br>";
}
*/


$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=$n;$j++){
		if ($j==$i || $i+$j==$n+1) {
			echo " * ";
		} else{
			echo " 0 ";
		}
}
echo "</br>";
}


?>