<?php

// Define the student details array
$students = [
    "Student1" => ["ID" => 1, "Name" => "RAM", "Subjects" => ["Math" => 80, "Science" => 70, "English" => 60]],
    "Student2" => ["ID" => 2, "Name" => "RAJ", "Subjects" => ["Math" => 90, "Science" => 90, "English" => 90]]
];



function totalGrade($subjects) {
    $total = array_sum($subjects);
    return $total;
}

function totalAverage($subjects){
    $total = array_sum($subjects);
    $average = $total / count($subjects);
    return $average;
}



function determineGrade($average) {
    if ($average >= 75) {
        return 'A';
    } elseif ($average >= 50) {
        return 'B';
    } else {
        return 'C';
    }
}

// Display student records
foreach ($students as $student) {
    echo "ID: " . $student["ID"] . "<br>";
    echo "Name: " . $student["Name"] . "<br>";
    echo "Subjects and Grades:<br>";
    
    foreach ($student["Subjects"] as $subject => $grade) {
        echo "$subject: $grade<br>";
    }
    $total = totalGrade($student["Subjects"]);
    
    $average = totalAverage($student["Subjects"]);
    
    $gradeCategory = determineGrade($average);
    
    echo "Total Grades: $total<br>";
    echo "Average Grade: $average<br>";
    echo "Grade Category: $gradeCategory<br>";
    echo "<br>";
}




?>