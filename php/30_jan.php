<?php


// for($i=0; $i<=5; $i++)
// {
//     for($j=0; $j<=5; $j++)
//     {
//         echo $j;
//         echo "<br>";
//     }
//     // echo $i;
    
// }

//using goto operator
// $a=10;
// if($a == 10){
//     goto start;
// }
// if($a == 20){
    
//     goto end;
// }
// start:
// echo "Hello world!";

// end:
// echo "Bye";


// $str = array("name"=>"raj", "rollno"=>20, "age"=>20);
// foreach($str as $key=> $value){
//     echo "<br>".$key ." : ". $value . "<br>";
// }




//-------------------------------------------------------

// Super global variables

// echo $_SERVER['PHP_SELF']; //filename
// echo "<br>";
// echo $_SERVER['SERVER_NAME']; //local host
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD']; //get
// echo "<br>";
// echo $_SERVER['HTTP_HOST']; //localhost
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT']; 
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME']; //filename
// echo "<br>";

//-------------------------------------------------------



// Form methods 
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $name=$_GET["name"];
    echo "Hello, $name";
}
?>

<form action="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
Name : <input type="text" name="name">
<input type="submit">
</form>

