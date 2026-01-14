<?php


$str1 = "RAM" ;
echo "my name is $str1\n" . "<br>" ;
echo 'my name is $str1\n' . "<br>" ;

$str2 = "Hello World!";
echo strtoupper($str2) . "<br>" ;
echo strtolower($str2) . "<br>" ;

$str = "i love php";
echo str_replace("php", "python", $str) . "<br>";

echo substr($str , 7 , 5);

$example = "rayy@example.com";
echo substr($example, -3,3) . "<br>";




?>