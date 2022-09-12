<?php
/*
PHP supports C-style pre-and post-increment and decrement operators
++$a   Pre-increment   Increment $a by one, then returns $a.
$a++   Post-increment  Returns $a, the increment $a  by one.
--$a   Pre-decrement   Decrement $a by one,then result $a.
$a--   Post-decrement  Returns $a, then decrement $a by one.
*/

//$a = 5;
/*
 echo ++$a."</br>";
 echo $a++."</br>";  //Output:- 6  |  6
 */
/*
echo --$a."</br>";
echo $a--."</br>";
echo $a;            //Output:- 4  | 4  | 3 
*/

/*
$a = 1;
$b = 2;
$c =  $a++  +  ++$b;     //Output:- 1 + (1+2)=4
//$c =  ++$a  +  $b++;     //Output:- (1+1) + 2=4
echo $c;
*/

$a = 2;
$c = ++$a + $a++;         //Output:- (1+2) + 3=6
//$c = $a++ + $a++ + ++$a;    //Output:- 2 + (2+1) +(1+4)=10
echo $c;

?>