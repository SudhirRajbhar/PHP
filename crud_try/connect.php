

<?php

//How to make connection in php with mysqli

$con=new mysqli('localhost','root','','operation');

/*
if($con){
    echo "Connection Successfully";
}else{
    die(mysqli_error($con));
}
*/


if(!$con){
    die(mysqli_error($con));
}


?>