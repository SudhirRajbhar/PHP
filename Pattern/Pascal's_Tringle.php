<?php
# In Pascal's tringle, each number is the sum of the two numbers directly above it.
$rows = 5;

for($i=0; $i<$rows; $i++){
     $num =1;

     for($k=$rows; $k > $i; $k--) {
         print "&nbsp;&nbsp;";
     }

     for($j =0; $j<=$i; $j++) {
         print $num;

         if ($j<$i) {
             print "&nbsp;&nbsp;";
         }
         $num = $num*($i - $j) / ($j + 1);
     }
     print "<br>";
    }
?>