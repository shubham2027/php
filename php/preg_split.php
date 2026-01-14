<?php

$words = ['apple', 'banana', 'cherry', 'date', 'banana'];

$pattern1 = "/^a/";
$pattern2 = "/e$/";

$matched_words1 = preg_grep($pattern1, $words); //matches words starting with 'a'
$matched_words2 = preg_grep($pattern2, $words); //matches words ending with 'e'

echo "Words starting with 'a': " . implode(" , ", $matched_words1); // implode() is used to join array elements with a string
echo "<hr>";

echo "Words ending with 'e': " . implode(" , ", $matched_words2); // implode() is used to join array elements with a string 

$pattern3 = "/\s+/"; //mathces one or more white space characters

$replacement = "-";
$text = "<br>Hello world";

$new_text = preg_replace($pattern3, $replacement, $text);
echo $new_text, "<br>";

// $pattern4 = "/\d+/"; //matches one or more digits 
// $text2 = "Hello 123 world 456";

// $matched_numbers = preg_match_all($pattern4, $text2, $matches);



?>
