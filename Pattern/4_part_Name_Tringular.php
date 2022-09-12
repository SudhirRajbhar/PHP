<?php
/*
$str="SUDHIR";
$count=strlen($str);

for ($i=0; $i<$count; $i++) { 
	for($j=0; $j<=$i;$j++){
	echo " $str[$j] ";
}
echo "</br>";
}
*/



$str="SUDHIR";
$count=strlen($str);
 for($i=$count;$i>=0;$i--){
 	for($j=0; $j<$i; $j++) { 
 		echo $str[$j];
 	}
 	
 	echo "</br>";
 }


/*
echo $str[0];
echo $str[1];
echo $str[2];
echo $str[3];
echo $str[5];
*/

?>
