
<?php
//factorial 
function factorial($n){
    if($n == 0){
        return 1;
    }else{
        return $n * factorial($n-1);
    }
}
$a=5;
echo "Factorial of $a is: " . factorial($a);
echo "<hr>";

//check prime
function isPrime($n){
    for($i=2; $i<$n; $i++){
        if($n % $i == 0){
            return 0;
        }
    }
    return 1;
}
$checkprime = 11;
if(isPrime($checkprime)){
    echo " $checkprime is a prime number";
}else{
    echo " $checkprime is not a prime number";
}

echo "<hr>";


// reverse a string 
function reverse($str){
    $len = strlen($str);
    for($i=$len-1; $i>=0; $i--){
        echo $str[$i];
    }
}
$str1 = "hello";
reverse($str1);
// echo strrev($str1);


echo "<hr>";

// function to sort an array 
function sortArray($arr){
    sort($arr);
    return $arr;
}
$arr = array(1,3,2,5,4);
print_r(sortArray($arr));

?>