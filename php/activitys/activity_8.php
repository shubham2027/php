<html>
<body>
    <h1>Form</h1>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php

//create form with name and email and submit button and manage cookies and expiration and deleting cookies
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    setcookie("name", $name, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 = 1 day
    

}

// Display cookies if they are set
if (isset($_COOKIE['name']) && isset($_COOKIE['email'])) {
    echo "Cookie are set" . "<br>";
    echo "Cookie 'name' is: " . $_COOKIE['name'] . "<br>";
    echo "Cookie 'email' is: " . $_COOKIE['email'] . "<br>";
}
    ?>
</body>
</html>