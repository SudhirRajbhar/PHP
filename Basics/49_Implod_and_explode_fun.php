<?php
/*
                      <----------PHP Implode() Function------------>
                      ______________________________________________
                                 Implode() function

The Implode Function is used to "Join elements of an array with a string".

The Implode function in PHP is easily remembered as "array to string",which simply means that it takes an array and returns a string.
*/

/*
$colors = array('red','blue','yellow');

print_r($colors);

#implode(glue , pieces)  //Function
$res = implode(" ", $colors);

echo "my fav colors are " .$res . ".";
*/

/*
                                           <--------------PHP Explode() Function---------------------->
    The explode function is used to "Split s string by a specified string into pieces i.e. it breaks a string into an array"
*/

$biodata  = "My name is Sudhir Rajbhar.";
#$biodata  = "My ,name ,is Sudhir Rajbhar.";

$res  = explode(" ", $biodata);  //" " delemeter is most importent
#$res  = explode(",", $biodata);

echo "<pre>";
print_r($res);

foreach($res as $val){
    echo $val;
}

?>