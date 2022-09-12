<?php
/*
array_shift($arr):-        This Function removes an element from the beginning of an array.

array_unshift($arr,$var):- This Function Adds an element to the beginning of an array.
*/

$students  = array('Sudhir','Rajbhar','Bharadwaj','Rajpoot');

echo "<pre>";
print_r($students);

#array_shift(array, var);
array_shift($students);
echo "<pre>";
print_r($students);

#array_unshift(array, var);
array_unshift($students, 'Sudhir');
echo "<pre>";
print_r($students);


?>