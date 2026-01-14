<html>
<head>
    <title>Form Practice</title>
</head>

<body>
    <h1>Form Practice</h1>
    <form action="form_practice_home.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"  required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Password: $password <br>";
    }
    
    
    
    
    ?>
       
</body>
</html>