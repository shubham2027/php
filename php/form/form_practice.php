<?php
$message='';



if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if(strlen($password)<8){
            $message = "Password must be of length 8";
        }else if(!preg_match("/[a-z]/",$password)) {
            $message = "Password must contain lowercase";
            
        }else if(!preg_match("/[A-Z]/",$password)){
            $message = "Password must contain Uppercase";
            
        }else if(!preg_match("/[0-9]/",$password)){
            
            $message = "Password must contain numerical value";
        }else if(!preg_match("/[@#$%^&*!]/",$password)){
            $message = "Password must contain special character";
            
        }else if($password != $cpassword){
            $message = "Password must match ";
            
        }else{
            $message = "valid";
        }
    }
}




?>


<form action="" method="post">
    Password: <input type="password" name="password"> <br>
    Confirm password: <input type="password" name="cpassword" > <br>
    <input type="submit" value="submit" name="submit">
</form>

<p><?php echo $message; ?></p>