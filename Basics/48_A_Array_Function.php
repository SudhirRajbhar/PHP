<?php
/*
array_pop($arr):-          This function removes an element from the end of an array.

array_push($arr,$var):-    This function adds an element to the end of an array.

array_shift($arr):-        This Function removes an element from the beginning of an array.

array_unshift($arr,$var):- This Function Adds an element to the beginning of an array.
*/

$students = array('Sudhir','Rajbhar','Bharadwaj','Rajpoot');
#Before Removing
echo "<pre>";
print_r($students);

#array_pop(array , var);
array_pop($students);
echo "<pre>";
print_r($students);

#array_push (array , var);
array_push($students, "Rajpoot");
echo "<pre>";
print_r($students);
?>