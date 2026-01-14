<?php
// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    echo "<h2>Survey Submitted!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Age: $age</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Survey Form</title>
</head>
<body>
    <h1>Survey Form</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>