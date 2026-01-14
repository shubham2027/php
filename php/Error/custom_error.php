<?php
// //custom_errpr handlers

// function abc_error_handler($error_no, $error_msg){
//     echo "<br>Error Number: " . $error_no . " Error Message: " . $error_msg; 
// }
// set_error_handler('abc_error_handler'); // this will set the custom error handler function created by user
// echo $test1; // this will generate a warning because the variable $test1 is not defined 
// // $result = 7/0; // this will generate a fatal error because division by zero is not allowed
// echo "<br>";

// function customError($error_no, $error_msg) {
//     echo "<b>Error:</b> [$error_no] $error_msg<br>";
//     echo "Ending Script";
//     // die(); // this will stop the code execution
// }
// set_error_handler("customError"); // this will set the custom error handler function created by user
// trigger_error("Custom error triggered"); // this will generate a custom error message

// echo "<br>";

$test = 2;
if($test > 1){
    trigger_error("Value must be 1 or below"); // this will generate a user Notice message
    trigger_error("Value must be 1 or below", E_USER_WARNING); // this will generate a user warning message
}

function division($numerator, $denominator){
    if($denominator == 0){
        // die("<br>Error: Denominator cannot be zero"); // this will stop code and terminate the code
        trigger_error("Error: Denominator cannot be zero", E_USER_WARNING); // this will generate a user error message
        
    }else{
        echo "<br>Result: " . $numerator/$denominator ; // this will display the result of division

    }
}
division(10, 2); 
division(10, 0); //will genrate error and stop the code execution


function calcDivision($dividend, $divisor) {
    if($divisor == 0) {
        trigger_error("Division by zero",E_USER_WARNING); //E_USER_WARNING
    return false;
    }
    else{
        return $dividend/$divisor;
    }
}
function customError($errno, $errstr,$errfile,$errline) {
    $message = date("Y-m-d H:i:s");
    $message .= "Error:[" .$errno."],"."$errstr in $errfile on line $errline,x";
    error_log($message,3,"errors.log"); // this will log the error message in the errors.log file
    // die("There was an error, please try again later");
}
set_error_handler("customError");
// echo calcDivision(10,2);
echo calcDivision(10,0); // will generate error and stop the code execution 
echo"This will never be printed";



?>