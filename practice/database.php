<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($host, $user, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
}

$conn = new mysqli($host, $user, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS user(id INT PRIMARY KEY, name VARCHAR(50))";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "INSERT INTO user (id, name) VALUES($id , '$name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
}

if(isset($_POST['delete'])){
    $id = $_POST['input1'];
    $sql = "DELETE FROM user WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// priting all records
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
//     }
// } else {
//     echo "0 results<br>";
// }

// in table format
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding=5><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results<br>";
}



?>

<form action="" method="POST">
    <input type="number" name="id" placeholder="ID">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" name="submit" value="Insert">
</form>

<form action="" method="POST">
    input1: <input type="number" name="input1"><br>
    <input type="submit" name="delete" value="delete">
</form>