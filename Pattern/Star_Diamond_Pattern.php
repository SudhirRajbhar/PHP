<?php
/*
//Upper pat
     *  
    *  *
  *      *
*          *

*/

$rows = 4;
 
for ($i = 1; $i <=$rows; $i++) {
    for ($k = $rows; $k > $i; $k--) {
        print "&nbsp;&nbsp;";
    }

    print "*";
    
    for($j=1; $j < 2 * ($i - 1); $j++) {
        print "&nbsp;&nbsp;";
    }

    if($i == 1) {
        print "&nbsp;&nbsp;";
    } else {
        print "*";
    }
    print "</br>";
}


//Lower part
/*

  *      *
    *  *
      *  
*/ 
for ($i=$rows-1; $i >=1; $i--){
    for ($k = $rows; $k > $i; $k--) {
        print "&nbsp;&nbsp;";
    }

    print "*";
    
    for($j=1; $j < 2 * ($i - 1); $j++) {
        print "&nbsp;&nbsp;";
    }

    if($i == 1) {
        print "&nbsp;&nbsp;";
    } else {
        print "*";
    }
    print "</br>";
}

/*
Daimond

     *  
    *  *
  *      *
*          *
  *      *
    *  *
      *  
 
 */

?>