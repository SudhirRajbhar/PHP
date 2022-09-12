<?php

//Iteration literally means repetition of a process. So iterative statement are constructs that help us repeat some statements a defined no of times.The different iterative statement available in PHP are.
/*
While Loop
Do While loop
For Loop

The while-Loops through a block of code as long as the specified condition is true.

Syntax
while(condition is true){
    code to be executed;
}
*/



$i = 1;
while ($i <= 20) {
    echo $i. "</br>";
    $i++;
}

//Output:- 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20

/*
$i = 9;
$j = 1;

while($i<=90){
    echo " 2 * {$j} = {$i} </br>"; //2 * 1 = 2
     //$i++;

    $i += 9;
    $j++;
}
//Output:- 9 18 27 36 45 54 63 72 81 90
*/
?>