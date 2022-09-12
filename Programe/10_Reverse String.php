<?php
/*
$string = "JAVATPOINT";  
echo "Reverse string of $string is " .strrev ( $string );  
*/

$string = "SUDHIR";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
}  
?>  