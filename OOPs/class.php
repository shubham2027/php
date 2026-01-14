<?php
class demo{
    //class properties and methods are declared here 
    private $a = "Hello World!";
    public function display(){
        echo "<br>" .$this->a . "<br>";
    } 
}

$obj = new demo();
var_dump($obj); 
echo "<br>";
// var_dump($obj instanceof demo); // true
$obj->display(); // Hello World!

class student{
    private $name = "John Doe";
    private $age = 20;
    private $gender = "Male";
    private $address = "123 Main St, City, Country";

    function __construct(){
        echo "<br>" . "Constructor called " . "<br>";
    }
    
    function __destruct(){
        echo "<br>" . "Destructor called " . "Destroying " . __CLASS__ . "<br>";
    }

    public function input($name, $age, $gender, $address){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;

    }

    public function display(){
        echo "<br>" . "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender" . $this->gender . "<br>";
        echo "Address: " . $this->address . "<br>";
    } 
}

$s1 = new student;
$s1->display();

$s2 = new student;
$s2->input("RAM", 23, "Male", "123 India");
$s2->display();


class test{
    private $marks;

    function __construct($marks){
        $this->marks = $marks;
    }
    function __destruct(){
        echo "<br>" . "Destructor called " . " Destroying " . __CLASS__ . "<br>";
    }
    function display(){
        echo "<br>" . "Marks: " . $this->marks . "<br>";
    }
}

$m1 = new test(100);
$m1->display(); 

?>