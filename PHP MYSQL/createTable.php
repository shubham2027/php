<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdatabase"; //add dbname here to connect to the database
$connection = new mysqli($servername, $username, $password, $dbname);
if( $connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connection Successful<br>";

//query to create a table
$sql = "CREATE TABLE IF NOT EXISTS studentDetails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    age INT(3) UNSIGNED,
    marks INT(3) UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    
)";

// Execute the query and check errors
if ($connection->query($sql) === TRUE) {
    echo "Table \"newdatabase\" created successfully<br>";
} else {
    echo "Error creating table: " . $connection->error . "<br>";
}
$connection->close();


?>