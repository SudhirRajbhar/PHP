<?php
#PHP Default Argument values Function


#function mult($a , $b){
function mult($a , $b=5){    # DefaultValue
    $multresu = $a * $b;
    echo $multresu . "</br>";
}
mult(10, 4);
mult(13, 7);
mult(17, 7);
mult(19, 9);
mult(10);
?>