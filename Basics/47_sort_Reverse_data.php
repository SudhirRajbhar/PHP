<?php
# Sorting And Reverse in Array
$students = array('Sudhir','Rajbhar','Bhardwaj','Rajpoot');

sort($students);

echo "<ol>";
foreach($students as $names){
    echo "<li>" .$names."</li>";
}
echo "</ol>";
?>