<?php
$servername = "localhost";
$username = "root";
$password = "";
$connection = new mysqli($servername, $username, $password);
if( $connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE student";
if($connection -> query($sql) === TRUE){
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $connection->error . "<br>";
}
$connection->close();
// this page shows fatal error as student database already exists
?>