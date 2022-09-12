<?php
/*
Besides the built-in- PHP Functions, it is possible to create your own functons.
A function is a block of statements that can be used repeatedly in a program.

a Function will not execute automatically when a page loads.
A function will be executed by a call to the function.

Function names follow the same rules as other labels in PHP.A valid function name starts with a letter or undercase, followed by any number of letters, numbers, or underscores.

*/

function sayMyName(){
    echo "My name is Rajbhar Sudhir.</br>";
    $sum = 4+5;
    echo "the sum of two no. is ".$sum ;  
}
sayMyName();
?>