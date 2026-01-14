<?php

session_start(); //start the session

//set session variables
$_SESSION['username'] = "abc";
$_SESSION['userid'] = "123";


?>

<html>
    <body>
        <?php

            echo "Session variables are set" . "<br>";

        ?>

        <a href="cookie.php">Go to second page</a>
    </body>
</html>


<?php

session_start();

//get the session variables
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

?>


<html>
    <body>
        <?php

            echo "Username is: " . $username . "<br>";
            echo "Userid is: " . $userid . "<br>";

        ?>
    </body>

</html>



<?php

session_start();

//update the session variable value
$_SESSION['userid'] = "111";




?>

<html>
    <body>
        <?php

            echo "username is : " . $username . "<br>";
            echo "userid is : " . $userid . "<br>";
        ?>
    </body>
</html>


<?php

session_start();

if(isset($_SESSION['counter'])){
    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter'] = 1;
}


$my_msg = "This page is visited " . $_SESSION['counter'] . " times" ;
echo $a . "<br>";
$b = "time during this session";
echo $b . "<br>";


?>


<?php

session_start();


?>

<html>
    <body>
        <?php
         //clean up the session variables
        session_unset();
        session_destroy(); //destroy the session

        ?>
    </body>
</html>