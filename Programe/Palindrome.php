<?php
/*
$n = "12321";
$rev = strrev($n);

if ($n==$rev) {
	echo "$n is Palindrome";
}else{
	echo "$n in not Palindrome";
}
*/




function palindrome($n){
	$number = $n;
	$sum = 0;

while (floor($number)) {
	$rem = $number % 10;
	$sum = $sum * 10 + $rem;
	$number = $number / 10;
}
return $sum;
}
$input = 1235321;
$num = palindrome($input);
if ($input == $num) {
	echo "$input is a palindrome number";
} 
else{
	echo "input is not a palindrome";
}

?>