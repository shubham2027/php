<?php
// Typecasting in PHP

$a=5; 
$a = (string) $a; //convert 5 into string
// var_dump($a);
echo gettype($a) . "<br>".$a . "<hr>";

$num = "abc";
$num = intval($num); //convert string into integer

echo gettype($num) . "<br>" . $num ."<hr>";



?>