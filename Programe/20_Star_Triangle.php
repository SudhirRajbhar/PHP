<?php  

//The star triangle in PHP is made using for and foreach loop. There are a lot of star patterns. We'll show some of them here

//Pattern 1
/*
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "* ";  
}  
echo "<br>";  
}  
*/

//Pattern 2

/*  
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "* ";  
}  
echo "<br>";  
}  
*/


//Pattern 3
/*  
for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
*/

//Pattern 4 

/* 
for($i=1; $i<=5; $i++){   
for($j=1; $j<=$i; $j++){   
echo ' * ';   
}  
echo '<br>';   
}  
for($i=5; $i>=1; $i--){   
for($j=1; $j<=$i; $j++){  
echo ' * ';   
}   
echo '<br>';   
}   
*/ 

//Pattern 5

for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=5; $j++)  
  {  
   echo '* ';  
  }  
   echo "</br>";  
}  



//Pattern 6
/* 
for($i=5; $i>=1; $i--)  
{  
if($i%2 != 0)  
{  
for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  


for($i=2; $i<=5; $i++)  
{  
 if($i%2 != 0)  
{  
 for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
*/


?>  