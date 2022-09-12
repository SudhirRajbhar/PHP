<?php 
/*
            5x9
      Column = 2*Row-1
Row Elements = 2*rownum-1


       1
      232n
     34543
    4567654
   567898765

*/
 $rowsCount = 5;
 $lCount = $rCount = $k = 0;

 for ($row = 1; $row <= $rowsCount; $row++) {
     for($space = 1; $space <= $rowsCount - $row; $space++) {
         print "&nbsp;&nbsp;";
         $lCount++;
     }

     while ($k != 2 * $row - 1) {
         if ($lCount <= $rowsCount - 1) {
             echo ($row + $k);
             $lCount++;
         } else {
             $rCount++;
             echo ($row + $k) - 2 * $rCount;
         }
         $k++;
     }
 $lCount = $rCount = $k = 0;
 print "</br>";
}
?> 