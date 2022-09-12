<?php
// Write a php script to combine two arrays and remove duplicate elements from an array

function arrayUnion($arr1, $arr2){
    $merge =  array_merge($arr1,$arr2);
    echo "<pre>";
    print_r($merge);

    $res = array_unique($merge);
    echo "<pre>";
    print_r($res);
}

$arr1 = array('red','yellow','blue');
$arr2 = array('green','red','blue','black');

arrayUnion($arr1, $arr2);

?>
