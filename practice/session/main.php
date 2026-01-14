<?php


session_start();

if(isset($_SESSION['username'])){
    echo "Welcome back, " . $_SESSION['username'] . "!<br>";
} else {
    echo "No session found. Please log in.<br>";
}

if(isset($_POST['submit'])){
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];

    if(isset($input1) && isset($input2)){
        echo "addition: " . ($input1 + $input2) . "<br>";
    } else {
        echo "Please enter both inputs.<br>";
    }
}


// logout button
if(isset($_POST['logout'])){
    session_destroy();
    echo "Session destroyed. You have been logged out.<br>";
    header("Location: login.php");
}
?>


<button>
    <a href="login.php">Logout</a>
</button>

<form action="main.php" method="POST">

    <label for="input1"><input type="number" name="input1"></label>
    <label for="input2"><input type="number" name="input2"></label>
    <input type="submit" name="submit" value="Submit">
</form>