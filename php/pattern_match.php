<?php

// finding pattern in a string
$string  = "welcome to php";

$pattern = "/php/i"; //i is for case-insensitive search

if(preg_match("/php/", $string)){
    echo "Match found!";
}else{
    echo "Match not found!";
}

echo "<br>";

preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE);
var_dump($matches);

echo "<br>";

// validate the number lies between 0 to 100

$number  = 98;

$pattern = "/^[1-9][0-9]?$|^100$/";




?>