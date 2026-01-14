<?php

// $arr = array("Sophia" => "31", "Jacob" => "41", "Ramesh" => "40");

// asort($arr); // prints 31 41 40
// // arsort($arr); // prints 40 41 31
// // ksort($arr); // prints Jacob 41 Sophia 31
// // krsort($arr); // prints Sophia 31 Jacob 41 Ramesh 40
// echo "Ascending order sort by value\n <br>";
// foreach($arr as $key => $value) {
//     echo "$key => $value\n";
// }

// echo "<br>";
// echo "Ascending order sort by Key\n <br>";
// ksort($arr);
// foreach($arr as $key => $value) {
//     echo "$key => $value\n";
// }
// echo "<br>";


// $temp = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
// for($i=0; $i<count($temp); $i++){
//     $sum = $sum + $temp[$i];
// }
// $avg = $sum/count($temp);
// echo "Average Temperature is : $avg\n";
// echo "<br>";




$name = "Sashank";
$str1 = "HI,hello";
$str2 = "HELLO";
$age = 20;
echo "My name is $name <br>"; 
echo 'my name is $name<br>'; //it will not work so we use double "" "
echo "before: $str2<br>";
$str2 .= $str1;  // string concatenation
echo "after: ";
echo $str2;
echo "<br>";
$str3 = "   WELCOME TO LPU";
$str4 ="welcome to lpu";
echo strlen($str3),"<br>";
echo strtolower($str3),"<br>";//convert the upper to lower
echo strtoupper($str3),"<br>";//convert the lower to upper
echo str_word_count($name),"<br>";// count the no of words
echo ucfirst($str4),"<br>";// uppercase the first letter its only for first word
echo ucwords($str4),"<br>";// uppercase the first letter of the words
echo trim($str3),"<br>";// it trims the white space  also we use itrim() and rtrim()
echo strrev($str3),"<br>";//it reverse the string
echo strpos($str3,"TO"),"<br>" ;// tells the position starting with 0\
echo str_replace("LPU","PHP",$str3),"<br>"; // replace
echo substr($str4,0,5),"<br>";// it will print the sub str
print_r(str_split($str1)); // it give the seperated





?>