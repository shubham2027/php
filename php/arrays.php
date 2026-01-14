<?php
//two ways of declaring array

// $array1 = array("a",10,"10.4","hello");
// $array2 = ["a", "b", "hello",'c'];
// var_dump($array2); //printing array with the data type


// echo $array2[2] . "<br>"; //printing specific elements of array
// print_r($array1);
// echo "<br>";
// var_dump($array1);


//-------------------------------------------------------------------

// typecasting and ovwerwriting 
// $arr  = array("a",10,"10.4","hello");

// $arr = array( 1=>"a" , "1"=>"b" , 1.5=>"c" , true=>"d"); //all will be overwrite the value of array at 1 index
// // in php true is also represented as 1
// echo "<br>";

// var_dump($arr);

// $arr2 = array(   //also called associative array

//     1 => "a",
//     "1" => "d", // the value "a" will  be  overwritten by "d"
//     1.5 => "b", // the value "d" will  be  overwritten by "b"
//     -1 => "L",
//     2 => 'c',
//     3 => true,
//     4 => false, // this is not visible on site
//     'k' , //if not assiging key to the value it will be automatically assigned to it
//     "" => "i" , //null key will be assigned "i"
//     null => "j" //null value will be updated to "j"
// );

// echo "<br>";
// PRINT_R($arr2);

//-------------------------------------------------------------------

//MATRIX (multidimensional array)

// $matrix = array(
//     array(1, 2, 3),
//     array(4, 5, 6),
//     array(7, 8, 9)
// );

// $c = count($arr); //count the element of arr
// // var_dump($matrix);
// echo "<br>";
// echo $matrix[1][2];
// echo "<br>";
// for($i=0; $i<3; $i++){ //for loop for accessing matrix elements
//     echo $matrix[$i][$i] . "   ";
// }

//------------------------------------------------------------------------

// $result = array(
//     array("X" , 9.9 , "pass"),
//     array("Y" , 10.1 , "pass"),
//     array("z" , 2.1 , "fail")
// );

// echo $result[0][0] . " --CGPA is: " . $result[0][1] . " and his status is " . $result[0][2] . "<br>";
// echo $result[1][0] . " --CGPA is: " . $result[1][1] . " and his status is " . $result[1][2] . "<br>";
// echo $result[2][0] . " --CGPA is: " . $result[2][1] . " and his status is " . $result[2][2];


//operations we can do on arrays 
    //1. array_push() // add elements to the end of the array
    //2. array_pop() // remove the last element of the array
    //3. array_reverse() // reverse the order of the array
    //4. array_combine() // combine two arrays to create an associative array
    //5. array_split() // split an array into chunks 
    //6. array_slice() // extract a slice of the array
    //7. array_splice() // remove a portion of the array and replace it with something else
    //8. array_shift() // remove the first element of the array
    //9. array_unshift() // add elements to the beginning of the array
    //10. array_map() // apply a callback function to the elements of an array
    //11. array_keys() // get all the keys of an associative array
    //12. array_values() // get all the values of an associative array
    //13. array_merge() // merge two or more arrays into one
    //14. array_chunk() // split an array into chunks of a specified size
    //15. array_diff() // compare two arrays and return the differences
    //16. array_intersect() // compare two arrays and return the common elements
    //17. array_unique() // remove duplicate values from an array
    //18. array_filter() // filter elements of an array using a callback function
    //19. array_reduce() // reduce an array to a single value using a callback function
    

    // sort , implode . explode , ksort , krsort , 

// Create an array with 3 elements
$arr = array(1, 2, 3);

// array_push() - Add elements to the end of the array
array_push($arr, 4, 5);
echo "After array_push: ";
print_r($arr);
echo "<br>";

// array_pop() - Remove the last element of the array
array_pop($arr);
echo "After array_pop: ";
print_r($arr);
echo "<br>";

// array_reverse() - Reverse the order of the array
$reversedArr = array_reverse($arr);
echo "After array_reverse: ";
print_r($reversedArr);
echo "<br>";

// array_combine() - Combine two arrays to create an associative array
$keys = array('a', 'b', 'c');
$combinedArr = array_combine($keys, $arr);
echo "After array_combine: ";
print_r($combinedArr);
echo "<br>";

// array_slice() - Extract a slice of the array
$slicedArr = array_slice($arr, 1, 2);
echo "After array_slice: ";
print_r($slicedArr); //prints 2,3
echo "<br>";

// array_splice() - Remove a portion of the array and replace it with something else
array_splice($arr, 1, 1, array('x', 'y'));
echo "After array_splice: ";
print_r($arr); //prints 1,x,y,3
echo "<br>";

// array_shift() - Remove the first element of the array
array_shift($arr);
echo "After array_shift: ";
print_r($arr);
echo "<br>";

function getArr(){
    return ['a'];
}






?>