
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdatabase"; //add dbname here to connect to the database
$connection = new mysqli($servername, $username, $password, $dbname);
if( $connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
print("Connection Successful<br>");

$id=3;
$name="John Doe";
$marks=68;
$age=22;

$sql = "UPDATE studentDetails SET name='$name', marks='$marks', age='$age' WHERE id=$id";
if(mysqli_query($connection, $sql)){
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . mysqli_error($connection) . "<br>";
}
// Close the connection
$connection->close();



?>