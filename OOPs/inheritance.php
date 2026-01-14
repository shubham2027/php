<?php
class A{
    public function display(){
        echo "<br>" . "This is parent Class" . "<br>";
    }
}

class B extends A{
    public function display(){
        A::display(); // Call parent class method
        echo "<br>" . "This is child Class" . "<br>";
    }
}

$obj = new B;
$obj->display(); // Class B





?>