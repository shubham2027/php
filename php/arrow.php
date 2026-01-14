<?php

$factor = 10;
$mul = fn($n) => $n * $factor;
echo $mul(5). "<hr>";

//array using arrow function

$num = [1,2,3,4,5];
$odd = array_filter($num , fn($n) => $n % 2 ==1);
print_r($odd);  


?>