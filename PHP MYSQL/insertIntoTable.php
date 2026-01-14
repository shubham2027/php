<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdatabase"; 
$connection = new mysqli($servername, $username, $password, $dbname);
if( $connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
print("Connection Successful<br>");


// //query to create a table
// $sql = "CREATE TABLE IF NOT EXISTS studentDetails (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     age INT(3) UNSIGNED,
//     marks INT(3) UNSIGNED,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";



// query to insert data into the table newdatabse
$sql = "INSERT INTO studentdetails(id, name, email, age , marks ) 
        VALUES(1, 'RAM', 'ram@gmail.com', 20, 90), 
              (2, 'RAJ', 'raj@gmail.com', 21, 80),
              (3, 'RAJA', 'raja@gmail.com', 19, 70)";

if($connection->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error . "<br>";
}
$connection->close();



?>