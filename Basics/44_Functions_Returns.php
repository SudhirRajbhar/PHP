<?php

#PHP Function Returns

#function mult($a , $b){
function mult($a , $b=5){    # DefaultValue
    $multresu = $a * $b;
    //echo $multresu . "</br>";
    return $multresu;
}
$output = mult(10, 4);
$output1 = mult(10, 5);
$output2 = mult(10, 6);
$output3 = mult(10, 7);
$output4 = mult(10, 8);

echo "the multiplication of two no. is " .$output ."</br>";
echo "the multiplication of two no. is " .$output1 ."</br>";
echo "the multiplication of two no. is " .$output2 ."</br>";
echo "the multiplication of two no. is " .$output3 ."</br>";
echo "the multiplication of two no. is " .$output4 ."</br>";






?>