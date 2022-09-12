<?php
/*
$a and $b    And        TRUE if both $a and $b are TRUE
$a Or $b Or  TRUE if    either $a or $b is TRUE
$a Xor $b    Xor        TRUE if  either $a or $b is TRUE , but not both.
$a &&  $b    And        TRUE if both $a and $b are TRUE.
$a || $b    TRUE if either  $a or $b is TRUE.
*/

/*
$a = 5;
$b = 10;
$c =  5;

if($a == $b or  $a == $c){
   // if($a == $b ||  $a == $c){

    echo "true";
}else{
    echo "false";
}
//Output :- true
*/


/*
$a = 5;
//$b = 10;
$b = 15;
//$c =  5;
$c =  50;
    if($a == $b XOR  $a == $c){
    
    echo "true";
}else{
    echo "false";
}

//Output :-> false
*/

$a = 5;
$b = 10;
$c =  5;

//if($a == $b and  $a == $c){
    if($a == $b &&  $a == $c){

    echo "true";
}else{
    echo "false";
}

//Output :-> false
?>