<?php
/*
==       Equal        $x==$y       Returns true if $x is equal to $y
===      Identical    $x===$y      Returns true if $x is equal to $y,
                                   and they are of the same type        */

$num1 = 5;
$num2 = 5;
//$num2 = "5";

// if($num1 == $num2) {
    if($num1 === $num2) {
    echo "Both the value are same.";
}else{
    echo "values are same but data types are diff.";
}
?>