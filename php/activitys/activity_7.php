<html>
    <!-- validate form and sanitize  -->
    <body>
        <h1>Fill the Form</h1>
        <form action="" method="post">
            Name: <input type="text" name="name" required><br>
            Email: <input type="email" name="email" required><br>
            Password: <input type="password" name="password" required><br>
            Gender: <input type="radio" name="male">Male 
                    <input type="radio" name="female">female
                    <input type="radio" name="attackhelicopter">Attack Helicopter
<br>
            Your CV: <input type="file" name="cv" required><br>
            Favorite programming language: 
                <select name="lang" id="lang" default="C++">
                    <option value="cpp">C++</option>
                    <option value="c">C</option>
                    <option value="java">Java</option>
                    <option value="python">Python</option>
                    <option value="php">PHP</option>
                    <option value="js">JavaScript</option>
                </select><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php
            // validate and sanitize the form data
            echo "<h1>Form Data</h1>";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

                
                echo "Name: $name<br>";
                echo "Email: $email<br>";
                echo "Password: $password<br>";
                
            }



        ?>
</body>
</html>