<h3>Registration Form</h3>
<form action="" method="post">
    <label for="username">Username </label> <br>
    <input type="text" name="username" id="username" required> <br>
    <label for="password">Password: </label> <br>
    <input type="password" name="password" id="password" required> <br>
    <label for="email">Email: </label> <br>
    <input type="email" name="email" id="email" required> <br>
    <label for="age">Age: </label> <br>
    <input type="number" name="age" id="age"> <br>
    <input type="submit" value="Submit" name="submit"> <br>
</form>
<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        
        if(strlen($password) < 8){
            echo "password must be at least 8 characters long.<br>";
        } else if (!preg_match("/[A-Z]/",$password)){
            echo "password must contain at least one uppercase letter.<br>";
        } else if (!preg_match("/[a-z]/",$password)){
            echo "password must contain at least one lowercase letter.<br>";
        } else if (!preg_match("/[0-9]/",$password)){
            echo "password must contain at least one number.<br>";
        } else if (!preg_match("/[\W]/",$password)){
            echo "password must contain at least one special character.<br>";
        } else {
            echo "Registration successful!<br>";
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is valid.<br>";
        } else {
            echo "Email is not valid.<br>";
        }

        if(filter_var($email, FILTER_SANITIZE_EMAIL)){
            echo "Email is sanitized.<br>";
        } else {
            echo "Email is not sanitized.<br>";
        }

        if(filter_var($url, FILTER_VALIDATE_URL)){
            echo "URL is valid.<br>";
        } else {
            echo "URL is not valid.<br>";
        }
    }
// }
?>