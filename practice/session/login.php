<?php

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($username)){
        $_SESSION['username'] = $username;
        echo "Session set for username: " . $_SESSION['username'];
        header("Location: main.php");
    }
}




?>
        <form action="" method="POST">
            Username: <input type="text" id="username" name="username"><br>
            Password: <input type="password" id="password" name="password"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
