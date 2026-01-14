<?php

// there are two types 
        // 1. built-in functions - date funcions , string functions , math functions , array functions
        // 2. user-defined functions - we can create our own functions

$a = 10;
if(is_numeric("s")){
    echo "yes" . "<br>";
}else{
    echo "no" . "<br>";
}

echo number_format(10000) . "<br>"; // prints 10,000
echo number_format(10000,2) . "<br>"; // prints 10,000.00


echo max(10,20,30,40,50) . "<br>"; // prints 50
echo min(10,20,30,40,50) . "<hr>"; // prints 10


//DATE
echo date("d/m/y") . "<br>"; //prints 07/02/25
echo date("d-m-y") . "<br>"; //prints 07-02-25
echo date("d.m.y") . "<br>"; //prints 07.02.25
echo date("l , F  j , Y") . "<br>";  //prints this Friday , February , 7 , 2025
echo time() . "<hr>"; // prints time in seconds

$timestamp = mktime(10,30,0,2,6,2025);
echo date("d/m/y h:i:sa", $timestamp) . "<br>";

$date1 = strtotime("2025-02-06");
echo $date1 . "<hr>";

//checkdate

if(checkdate(2,9,2025)){
    echo "valid date" . "<br>";
}else{
    echo "invalid date" . "<hr>";
}

//timezone
// $timezone_identifiers = DateTimeZone::listIdentifiers();
// foreach($timezone_identifiers as $key=> $list){
//     echo $list . "<br>";
// }

date_default_timezone_set("Asia/Kolkata"); //using default timezone
echo date("d/m/y h:i:sa") . "<hr>";

//using strtotime() -difference betweeen two dates
$date1 = strtotime("2025-02-06");
$date2 = strtotime("2025-02-09");
$diff = $date2 - $date1;
echo "difference between two dates is " . $diff . " seconds" . "<br>";
echo "difference between two dates is " . $diff/(60*60*24) . " days" . "<hr>";

//------------------------------------------------------------------------------------
// user define functions
function abc(){
    
    echo "HELLO WORLD!" . "<br>";
    echo "BYE!" . "<hr>";
}
abc();

echo "<hr>";
function userdetails(){
    echo "Details: ". "<br>"."<br>";
}

function details(){
    userdetails();
    echo "Name : RAM" . "<br>";
    echo "Age : 20" . "<br>";
    echo "Address : Kathmandu" . "<hr>";
}

details();

function sum($a , $b){
    echo "The sum of two numnbers is: ". $a + $b;
}

echo sum(-10,20) . "<hr>";

function user($n , $color){
    echo "<h1 style='color:$color;'> $n </h1>"; //dynamic coloring
}
user("HELLO WORLD!" , "red");

// pass by reference
function add(&$a){
    $a = $a + 5;
    echo $a;
}
$a = 10;
add($a);
echo "<hr>";

function add1($a, $b){
    $c = $a + $b;
    echo $c;
}

// add1(10,"Hello"); //fatal error

function user1(){
    return "hello" ;
    // echo "world";
}
echo user1();


function addition( & $val){
    $val = $val + 5;
}
$a = 10;
addition($a);
echo "<hr>" .$a . "<hr>";



function sum1(...$num){ //for taking more than one inputs
    $sum=0;
    foreach($num as $n){
        $sum = $sum + $n;
    }
    return $sum;
}


echo sum1(10,20,30,40,50) . "<hr>";

function varidicfun(string ...$args){ //for taking more than one inputs of string type
    foreach($args as $args){
        echo $args . " ";
    }
}

varidicfun("hello","world","how","are","you");

?>