<?php

//types of errors
// 1. Syntax Error: Occurs when there is a mistake in the syntax of the code.
// 2. Fatal Error: A critical error that causes the script to terminate immediately, such as calling a non-existent function or class.
// 3. Warning: A non-fatal error that does not stop the execution of the script, such as including a file that does not exist.
// 4. Notice: A minor error that indicates a potential problem in the code, such as using an undefined variable or array index.

//php error handling levels
// E_ALL: All errors and warnings (default setting)
// E_ERROR: Fatal run-time errors
// E_WARNING: Run-time warnings (non-fatal errors)
// E_NOTICE: Run-time notices (non-fatal errors)
// E_USER_ERROR: User-generated error message
// E_USER_WARNING: User-generated warning message
// E_USER_NOTICE: User-generated notice message


// $file = open("die.php", "r"); // This will cause a warning because the file does not exist in read mode

if(file_exists("testing.txt")){
    $file = fopen("testing.txt", "r"); // This will cause a warning because the file does not exist in read mode
    $content = fread($file, filesize("testing.txt")); // Read the file content
    fclose($file);   // close the file 
    echo $content; 
}else{  
    die("Error: File not found"); // This will terminate the script and display the message "File not found" if the file does not exist
}

//checking and displaying error that denominator should not be zero

function division($numerator, $denominator){
    if($denominator == 0){
        die("<br>Error: Denominator cannot be zero"); // this will stop code and terminate the code
    }else{
        echo "<br>Result: " . $numerator/$denominator ; // this will display the result of division

    }
}
division(10, 2); 
// division(10, 0); //will genrate error and stop the code execution



?>