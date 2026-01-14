<!-- $ sign is the sign of variables  -->

<!-- var_dump($a); returns two values data type of the variable and the value of the variable -->

<?php

$a=10;
$a1="10.0";
$b=50;
$s="Hello";
$fl=10.2;
$c='c';
// $t=true;.
$f=false;

// echo $a;
var_dump($a);
echo "<br>";
var_dump($fl);
echo "<br>";
var_dump($s);
echo "<br>";
var_dump($c); //also considered as string with 1 character

echo "<br>";
echo "<br>";
echo "<br>";
echo "a = ",$a,"<br>";
echo "b = ",$b,"<br>";

echo "SUM: ",$a+$b ,"<br>";
echo "SUBSTRACTION: ",$a-$b ,"<br>";
echo "DIVISION: ",$a/$b ,"<br>";
echo "MODULOUS: ",$a%$b ,"<br>";
echo "MULTIPLICATION: ",$a*$b ,"<br>";
echo "Square root of b: ",sqrt($b) ,"<br>";

// $check = $a == $b;
echo "<br>";
// echo "<br>";

// ------------------------------------------------
//ARRAY
echo '<br>', "Array usage-- ", '<br>';
// in php heterogeneous arrays are supported 
$arr=array("a","b",10.2,false,10.222);
$arr1=array("c","d",12.3,true);
var_dump($arr);
echo "<br>";
print_r($arr);

echo "<br>";
define("a","Hello world!");
const b="Bye!";
echo a,"<br>";
print(b);
echo "<br>";

define("Courses",["php","JAVA","DAA"]);
echo "<br>";
// echo Courses[0]; //in define arrays only index based printing is there 
var_dump(Courses);
echo "<br>";
print_r(Courses);

var_dump($arr==$arr1);
echo "<br>";
echo "Union of arrays using +: ";
print_r($arr+$arr1) ;
echo "<br>";
print_r($arr==$arr1) ; //prints true if both arrays are same
echo "<br>";
echo "<br>";



// ------------------------------------------------
echo "<br>","Magical keyword usge--", '<br>';
echo "<br>",__LINE__, "<br>";
echo __FUNCTION__ , "<br>";
echo __METHOD__ , "<br>";



echo "<br>";
echo "<br>";
var_dump($a==$a1); //checks if both values are same or not
echo "<br>";
var_dump($a===$a1); //checks if both values and data types are same or not

echo "<br>";

echo "<br>" , --$a;

echo "<br>","String Operations--", "<br>" ;
$str1="first string";
$str2=" second string";

echo "<br>" , "Concatenation of strings: ", $str1.$str2;
echo "<br>" , "Appeding of string2 into string1: ", $str1.=$str2;

echo "<br>";
echo "<br>";
echo "<br>";
echo '<br>', "Ternary operator usage-- ", '<br>';
$age = 20;
echo ($age>18)?"above 18": "below 18";

?>