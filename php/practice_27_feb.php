<?php


//print sum of array
$prices = [500,1200,350,800,2000];
function sum($arr){

    echo  "TOTAL : ". array_sum($arr);
}
sum($prices);
echo "<hr>";



//print min max from an array
$temp = [22,66,88,93.5];
function minmax($arr){

    echo "Max temp: " . max($arr) . "<br>";
    echo "Min temp: " . min($arr) . "<br>";
}
minmax($temp);
echo "<hr>";



//remove duplicate email id's
$emails = ["ABC@gmail.com", "ACD@gmail.com", "BCD@gmail.com", "ABC@gmail.com"];

function uniqueArray(&$arr){
    return array_unique($arr);
}
echo "Before removing duplicates" . "<br>";
print_r($emails);
echo "<br><br>After removing duplicates<br>";
print_r(uniqueArray($emails));
echo "<hr>";



//merge customer orders without duplicates
$order1 = ['burger','pasta','pizza','soup'];
$order2 = ['burger','pasta','pizza','salad'];

function mergeOrders($order1,$order2){

    $order3 = array_merge($order1,$order2);
    return array_unique($order3);

}

print_r(mergeOrders($order1,$order2));
echo "<hr>";



//count specific array element occurrence

$sales = ['laptop','phone','tablet','laptop','tablet','tablet'];
function countProductSales($arr,$element){
    $count = 0;
    for($i=0; $i<count($arr) ;$i++){
        if($arr[$i] == $element){
            $count= $count+1;
        }
    }
    return $count;
}
function countProductSales1($arr,$element){
    $count1 = array_count_values($arr);
    print_r($count1[$element]);
}

$product = "tablet";
echo  'Occurence of ' . $product ." is ".countProductSales($sales,$product) . "<br>";
echo  'Occurence of ' . $product ." is ".countProductSales1($sales,$product);

echo "<hr>";

//fibonacci series

$fib = [0 ,1];
for($i=2,$j=0; $i<10,$j<10; $i++,$j++){
    $fib[] = $fib[$i -1]+ $fib[$i-2];
    // echo $fib[$j] . "<br>";
    
}


echo "Fibbonacci series" . "<br>";
print_r($fib);

echo "<hr>" .date("Y");
echo "<hr>" .date("M") ."  " . date("m");
echo "<hr>" .date("D");




//counting vowel

echo "<br>" . "<hr>";
$word = "Hello";
$arr = str_split($word);    
$vowelcount = 0;
$consonantCount = 0;
foreach($arr as $i){
    if($i == 'a' || $i == 'e' || $i == 'i' || $i == 'o' || $i == 'u'){
        $vowelcount++;
    }else{
        $consonantCount++;
    }
}
echo $vowelcount;
echo "<br>";
echo $consonantCount;


echo "<hr>";

//magical words
echo  "The current line is " .  __LINE__ . "<br>";
echo  "The file is " .  __FILE__ . "<br>";
echo  "The file directory is " .  __DIR__ . "<br>";

echo `date` . "<br>" . "<hr>";


function fibonacciSeries($n){
    $a = 0;
    $b = 1;
    for($i=0; $i<$n; $i++){
        echo $a . "  ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}

fibonacciSeries(10);

echo "<hr>";



// insert at any positio in array

$arrr = [1,2,3,4,5];
function insertArray($arr, $pos , $key){

    for($i=count($arr); $i>$pos; $i--){
        
        $arr[$i] = $arr[$i-1];

    }
    $arr[$pos] = $key;

    return $arr;
}

$ar1 = insertArray($arrr,3,11);
print_r($ar1);
echo "<hr>";

//sorting 

$newArr = array("Sophia"=>"31",
                "Jacob"=>"41",
                "William"=>"39",
                "Ramesh"=>"40");

asort($newArr);
print_r(($newArr));
echo "<br>";

ksort($newArr);
print_r(($newArr));
echo "<br>";
echo "<br>";

arsort($newArr);
print_r(($newArr));
echo "<br>";

krsort($newArr);
print_r(($newArr));
echo "<br>" . "<hr>";

echo implode(" | ", array_filter(range(200,250,4)));

echo "<hr>";

echo implode(" ", array_filter(range("a","z")));

echo "<hr>";

//palindrome
$str1 = "malyalam";
$str2 = strrev($str1);
if($str1 == $str2){
    echo "Palindrome";
}else{
    echo "Not Palindrome";
}
echo "<hr>";

$n1 = explode(",",$str1);
$n2 = explode(",",$str2);

if($n1 == $n2){
    echo "Palindrome";
    
}else{
    echo "Not Palindrome";

}


echo "<hr>";


?> 