<?php
/*
How to count the number of words in a string in PHP?
PHP str_word_count() Function
The str_word_count() function counts the number of words in a string.
*/
$data =  "Again, Good Morning, and have an awesome video.";

$wordsCount = str_word_count($data);

echo 'The number of words are' .$wordsCount;

?>