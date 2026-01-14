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

$sql = "SELECT id, name, age FROM studentDetails where age > 20 order by name asc"; // SQL query to select data from the table and order by name in ascending order
$result = $connection->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
}else{
    echo "0 results<br>";
}

$connection->close();



?>
