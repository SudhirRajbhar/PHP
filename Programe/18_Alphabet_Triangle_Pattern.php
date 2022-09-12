<?php  
//Some different alphabet triangle patterns using range() function in PHP are shown below.

/*
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=5; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
*/


/*
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
*/


  
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $alpha[$j];  
    }  
    echo "<br>";  
}  




 /* 
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=4; $j>=$i; $j--){  
    echo $alpha[$j];  
    }  
    echo "<br>";  
}  
*/


/*
$alpha = range('A', 'Z');  
for ($i=5; $i>=1; $i--) {    
  for($j=0; $j<=$i; $j++) {    
     echo ' ';    
  }  
  $j--;  
for ($k=0; $k<=(5-$j); $k++) {    
    echo $alpha[$k];   
}    
echo "<br>\n";  
}  
*/ 


?>  

