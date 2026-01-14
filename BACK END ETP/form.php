<html>


<body>
    <div class=" bg-blue-400">

        <h1>Login Page</h1>
        <form method="POST">
            
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
    </div>
</body>
</html>
<?php


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!preg_match('/[A-Z]/',$username)){
        echo "<p style='color:red'>username must contain at least one uppercase character</p><br>";
        
    }else if(!preg_match('/[a-z]/', $username)){
        echo "<p style='color:red'>username must contain at least one lowercase character</p><br>";
        
        
    }else if(!preg_match('/[\W]/',$password)){
        echo "<p style='color:red'>password must contain at least one special character</p><br>";
        
    }else if(!preg_match('/[a-z]/',$password)){
        echo "<p style='color:red'>password must contain at least one lowercase character</p><br>";
        
    }else if(!preg_match('/[A-Z]/',$password)){
        echo "<p style='color:red'>password must contain at least one uppercase character</p><br>";
    }else if(strlen($password) < 5){
        echo "<p style='color:red'>password must contain 5 characters</p><br>";
        
    }else {
        echo "<p style='color:green'>Login Successful!! for user:  " . $username . "</p>";


        
    }
    
}

?>