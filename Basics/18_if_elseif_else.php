<?php
//The if...elseif..else statement execute different codes for more than two conditions
/*
Syntax
if(condition){
    co to be executed if this condition is true;
} elseif(condition){
    code to be executed if first condition is false and this condition is true;
} else{
    code to be executed if all condition are false;
}
*/

/*
$num = 67;                  //66  67 
if( $num % 2 == 0){
    echo "Multiplies of 2";

} elseif($num % 3 == 0){
    echo "Multiplies of 3";

}  elseif($num % 4 == 0){
    echo "Multiplies of 4";

}  elseif($num % 5 == 0){
    echo "Multiplies of 5";

} else {
    echo 'God Knows';
}

//Output:-> God Knows
*/


$age =  40;

if($age <= 5){
    echo "This is a baby.";

}
elseif ($age <= 12){
    echo "This is a teenager.";

}
elseif ($age <= 22){
    echo "This is a teenager.";

}
elseif ($age <= 40){
    echo "This is a teenager.";
}

//Output:- > This is a teenager.
?>