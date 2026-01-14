<?php

try{
    $first = 10;
    $second = 0;
    if($second == 0){
        throw new Exception("Denominator cannot be zero"); // this will generate an exception
    }else{
        echo "<br>Result: " . $first/$second ; // this will display the result of division
    }

} catch(Excption $e){
    echo "<br>Exception: " . $e->getMessage(); // this will display the error message
    // print("Exception: $second" . $e->getMessage()); // this will display the error me    ssage
}








?>