<?php

//function overloading in classes

interface fruit{
    public function color();
}

class apple implements fruit{
    public function color(){
        echo "Red";
    }
    
}

$obj = new apple();
$obj->color(); // Output: Red


class A{
    public function display(){
        echo "Parent A";
    }
}

interface B{
    public function display();
}

class C extends A implements B{
    public function display(){
        echo "Child C";
    }
}
$obj = new C();








?>