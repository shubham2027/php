<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD FORM</title>
</head>
<body>
    <h2>Add two numbers</h2>
    <form action="" method="post">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1" id="num1" required>
        <br>
        <label for="num2">Enter second number:</label>
        <input type="text" name="num2" id="num2" required>
        <br>
        <br>
        <input type="submit" value="Add" name="operation">
        <input type="submit" value="Subtract" name="operation">
        <input type="submit" value="Division" name="operation">
        <input type="submit" value="Multiplication" name="operation">
    </form>

    <!-- <form action="" method="></form> -->
    <br>


    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        if($operation == "Add"){
            echo "The sum of $num1 and $num2 is: " . ($num1 + $num2);
        }else if($operation == "Subtract"){
            echo "The difference of $num1 and $num2 is: " . ($num1 - $num2);
        }else if($operation == "Division"){
            echo "The division of $num1 and $num2 is: " . ($num1 / $num2);
        }else if($operation == "Multiplication"){
            echo "The product of $num1 and $num2 is: " . ($num1 * $num2);
        }
    }
    ?>


<?php



?>

</body>
</html>