<?php  
//Number triangle in PHP can be printed using for and foreach loop. There are a lot of patterns in number triangle. Some of them are show here.
//Pattern1
/*
$k=1;  
for($i=0;$i<4;$i++){  
for($j=0;$j<=$i;$j++){  
echo $k." ";  
$k++;  
}  
echo "<br>";  
}  
*/

//Pattern2

/*
$k=1;  
for($i=0;$i<5;$i++){  
for($j=0;$j<=$i;$j++){  
if($j%2==0)  
{  
$k=0;  
}  
else   
{  
$k=1;  
}  
echo $k." ";  
}  
echo "<br>";  
}  
*/


//Pattern 3

/*  
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo $j;  
}  
echo "<br>";  
}  
*/



//Pattern 4

/*
for($i=0;$i>=5;$i++){  
for($j=1;$j>=$i;$j++){  
echo "1";  
}  
echo "<br>";  
}  
*/


//Pattern 5

/*
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "1";  
}  
echo "<br>";  
}   
*/

//Pattern 6
/*  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "1";  
}  
echo "<br>";  
}   
*/

//Pattern 7
/*  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo $j;  
}  
echo "<br>";  
}  
*/

//Pattern 8
 
for($i=5;$i>=1;$i--){  
for($j=$i;$j>=1;$j--){  
echo $i." ";  
}  
echo "<br>";  
}  


?>
 

