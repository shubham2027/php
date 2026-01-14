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



$id = 2; // ID of the record to delete
$sql = "DELETE FROM studentDetails WHERE id = 3"; // SQL query to delete data from the table

$result = $connection->query($sql);

if(mysqli(affected_rows($connection) > 0)){
    echo "Record deleted successfully<br>";
}else{
    echo "Error deleting record: " . mysqli_error($connection). "<br>";
}
$connection->close();

?>