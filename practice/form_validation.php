
<html>
    <body>
        
        <form action="" method="post">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name=submit value="Submit"><br>
            <input type="reset" name=reset value="Reset"><br>
        </form>
    </body>
</html>



<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($name)){
        echo "Name is required<br>";
    }
    if(empty($email)){
        echo "Email is required<br>";
    }
    if(!$email.include('@')){
        echo "Email is not valid<br>";
    }
}











?>