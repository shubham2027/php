<?php

if(isset($_GET["name"])){
    echo "Hello, " . $_GET["name"] . "</p>";
}


?>

<form action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>

</form>