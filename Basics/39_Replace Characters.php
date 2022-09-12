<?php
/*
How to replace characters/Words in a string in PHP?
     PHP str_replace() Function
The str_replace() function replaces some characters with some other characters in a string.  

Note:- The Function is case-sensitive. Use the  str_ireplace() function to perform a case-insensitive search.
*/



//echo str_ireplace("sUdhir","Rajbhar","Awesome Sudhir");
//echo str_replace("Sudhir","Rajbhar","Awesome Sudhir");

$names = "Sudhir|rajbhar|Rajpoot|Nagvanshi|Rajshiv";

echo str_replace("|",",", $names);
?>