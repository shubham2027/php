<!-- <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    echo "<h2>Hello,  $username!<h2>";

}
?> -->


<?php
//using security measures
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["username"])){
        //Sanitize use input to prevent XSS attack
        $username = htmlspecialchars($_POST["username"]);
        echo "<h2>Hello,  $username!<h2>";
    }else{
        echo "<h2>Please enter your name<h2>";
    }
}else{
    echo "<h2>Invalid Request!<h2>";
}

?>