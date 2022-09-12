<?php
/*
3 Rows -> 5 Columns

5 Rows -> 9 Columns

If n is no. of rows 
Then 2n-1 will be no. of columns
*/

/*
pragram to print the Pyramid pattern
      *
     ***
    *****
   *******
*/

#4 Rows -> 7 Columns
$n=4;
for($i=1; $i <= $n; $i++) {

    for( $j=1; $j <= (2*$n)-1; $j++) {

        if( $j >= $n-($i-1) && $j <= $n+($i-1)){
            echo"*";
        } else {
            echo"&nbsp;&nbsp";
        } 
    }  
        echo "</br>";
    }
?>