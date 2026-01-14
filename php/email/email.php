<?php

$to = "skshubhamskkr@gmail.com "; //to whom we are sending the email
$subject = "My subject"; //subject of the email
$message = "Hello! How are you?"; //message of the email
$from = "abc@gmail.com"; //from whom the email is sent
// $headers = "From: $from"; //header of the email
$check = mail($to,$subject,$message); //mail function to send the email

if($check == true){
    echo "Mail sent successfully";
}else{
    echo "Mail not sent";   
}

?>

<?php


// steps of sending email in php
// 1. mailhog.exe 
// 2. open php.ini file and set the following values
//    SMTP = 25 -> 1025
// 3. save file & restart the server (XAMPP)
// 4. open vscode and execure the email php file











?>