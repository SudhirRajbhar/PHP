<?php
/*
An array is a speacial variable,which can hold more than one value at a time.

Array can be used to store linear data of similar types.

In PHP,the array() function is used to create an array:
        Syntax
                 array();
In PHP,there are three types of arrays:

Indexed array            -  Arrays with a numeric index
Associative              -  Arrays with named keys
Multidimensional arrays  -  Arrays containing one or more arrays
*/

$names = array("Sudhir","Rajbhar","Rajpoot","Nagvanshi","Rajshiv","Brothers");

/*
 echo "<pre>";
 print_r($names);
#An other way to add Index in Array
$names[6] = "Friends";
*/




//echo "<pre>";
//print_r($names);

#Lenght of Array
$arraylength = count($names);
echo $arraylength;

#Loop
/*
for($i=0; $i<$arraylength; $i++){
    echo "<br>" .$names[$i] ."<br>";
}
*/
# Order List using HTML

echo "<ol>";
for($i=0;  $i<$arraylength; $i++){
    echo "<li>" .$names[$i]. "</li>";
}
echo "</ol>";

?>