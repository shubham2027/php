<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "school_managment";
$conn = "";

$conn = new mysqli($db_server,$db_user,$db_pass,$db_name);

$sql = "SELECT * FROM students;";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()){ ?>
            <tr>
            <td> <?php echo $row["id"]; ?> </td>
            
            <td> <?php echo $row["first_name"]; ?> </td>
            <td> <?php echo $row["last_name"]; ?> </td>
            <td> <?php echo $row["age"]; ?> </td>
            <td> <?php echo $row["grade"]; ?> </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>