

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <!-- <style>
        body {
            font-family: Arial,italic;
            font-weight :strong;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            ;
        }
        .calculator {
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px gray;
            border-radius: 20px;
            text-align: center;
        }
        input, select, button {
            margin: 10px;
            padding: 8px;
            width: 100%;
            border-radius:30px;
            
        }
    </style> -->
</head>
<body>
    <div class = "calculator">
        <h1> This is Simple calculator</h1>
            <form action ="" method ="POST">
            <input type = "number" name = "num1" placeholder = "NUMBER 1" required>
            <select name="opertor">
                <option Value ="add">+</option>
                <option Value ="sub">-</option>
                <option Value ="mul">*</option>
                <option Value ="div">/</option>
            </select>
            <input type = "number" name= "num2" placeholder = "NUMBER 2" required>
            <button type ="submit" name ="calculate">Calculator</button>
            </form> 

        <?php
            if(isset($_POST['calculate'])){
                $num1 =$_POST['num1'];
                $num2 = $_POST['num2'];
                $opertor = $_POST['opertor'];
                $Result =0;
                if($opertor == "add"){
                    $result = $num1  + $num2;
                }
                else if($opertor == "sub"){
                    $result = $num1  - $num2;
                }
                else if($opertor == "mul"){
                    $result = $num1  * $num2;
                }
                else if($opertor == "div"){
                    $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
                }
                echo "<h2> Result : $result</h2>";
            }
        ?>
    </div>
</body>
</html>