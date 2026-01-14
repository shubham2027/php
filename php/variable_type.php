<!-- local , global , static -->

<?php


// global variable
$g = 20;
function ab(){
    global $g;  //for accessing global variable inside function
    
    echo "Global variable:   " . $g. "<br>";

    //using GLOBALS[]
    echo "Global variable:   " . $GLOBALS['g'] . "<br>";
}
ab();
echo "<hr>";

// local variable
function abc(){
    $a = 10;
    echo  "Local variable: " . $a . "<br>";
}
abc();
// echo $a; //error

echo "<hr>";

// static variable
function aa(){
    static $x = 10;
    echo $x . "<br>";
    $x++;
}
aa();
aa();


// declare(strict_types=1); //strict type declaration
// function sum(int $a , int $b){
//     echo "The sum of two numnbers is: ". $a + $b;
// }



?>