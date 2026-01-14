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


$sql = "SELECT 
        AVG(marks) as average_marks,
        MAX(marks) as max_marks,
        MIN(marks) as min_marks,
        COUNT(marks) as total_students,
        SUM(marks) as total_marks,
        GROUP_CONCAT(UCASE(name)) as upper_case_student_names,
        GROUP_CONCAT(LCASE(name)) as lower_case_student_names
        FROM studentDetails"; // SQL query to select data from the table and order by name in ascending order      

$result = $connection->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Average Marks: " . $row["average_marks"]. "<br>";
        echo "Max Marks: " . $row["max_marks"]. "<br>";
        echo "Min Marks: " . $row["min_marks"]. "<br>";
        echo "Total Students: " . $row["total_students"]. "<br>";
        echo "Total Marks: " . $row["total_marks"]. "<br>";
        echo "Upper case Student Names: " . $row["upper_case_student_names"]. "<br>";
        echo "Lower case Student Names: " . $row["lower_case_student_names"]. "<br>";
    }
}else{
    echo "0 results<br>";
}



$connection->close();



?>
