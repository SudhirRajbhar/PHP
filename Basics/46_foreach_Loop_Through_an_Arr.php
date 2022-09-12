<?php
/*
The foreach loop- Loops through a block of code for each element in an array.

The foreach loop works only on arrays,and is used to loop through each key/value pair in an array.

Syntax
foreach($array as $value){
    code to be executed;
}
*/

$students = array('Sudhir','Rajbhar','Rajpoot','Brothers','Alone','Silent');

/*   foreach loop
foreach($students as $names){
    echo $names;
}
 Syntax  */ 
echo "<ol>";
foreach($students as $names){
    echo "<li>" .$names . "</li>";
}
echo "</ol>";
?>