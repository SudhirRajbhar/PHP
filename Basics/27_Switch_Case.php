<?php
// The switch statement is used to perform different action based on different condition.
/*
syntax
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
        case label2:
            code to be executed if n=label2;
            break;
            case label3:
                code to be executed if n=label3;
                break;
               default:
                  code to be executed if n is different from all labels;
}
*/

$favColor  = "yellow";

switch($favColor){
    case "blue": echo'your fav color is Blue';
          break;   
    case "red": echo'your fav color is Red';
          break; 
    case "green": echo'your fav color is Green';
          break; 
    default: echo 'Sorry, I am not sure about your fav color.';
}

//Output:- Sorry, I am not sure about your fav color.
?>