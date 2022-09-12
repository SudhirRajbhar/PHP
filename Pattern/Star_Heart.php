<?php
#heart shape  parren in PHP
for ($r=0; $r < 6; $r++) {
    for ( $c = 0; $c < 7; $c++) {
        if (($r ==0 && $c%3!=0) || ($r ==1 && $c%3==0) || ($r-$c ==2)  || ($r + $c==8)) {
            /*
            Row           Column                      
             0             0 % 3 = 0
                           3 % 3 = 0
                           6 % 3 = 0

                 ($r == 0 && $c%3!=0) 

            
            Row           Column
             0             0 % 3 = 0
                           3 % 3 = 0
                           6 % 3 = 0

                 ($r == 1 && $c%3=0)      

            Row       -    Column
             2        -      0 = 2
             3        -      1 = 2
             4        -      2 = 2
             5        -      3 = 2

                   ($r - $c ==2)
            
            Row       +    Column
             2        +      6 = 8
             3        +      5 = 8
             4        +      4 = 8 

                   ($r + $c ==8)
            */
            echo "*";
        } else {
            echo "&nbsp;&nbsp";  //html code
        }
    }
    echo "</br>";
}
?>