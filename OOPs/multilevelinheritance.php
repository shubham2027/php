<?php
//Multilevel Inheritance
// class A{
//     public function display(){
//         echo "<br>" . "This is parent Class A" . "<br>";
//     }


// }

// class B extends A{
//     public function display(){
//         parent::display(); // Call parent class method
//         echo "<br>" . "This is child Class B" . "<br>";
//     }
// }

// class C extends B{
//     public function display(){
//         parent::display(); // Call parent class method
//         echo "<br>" . "This is child Class C" . "<br>";
//     }
// }

// $obj = new C;
// $obj->display(); // Class C



class student{
    public $name = "John Doe";
    public $roll = 20;

}

class result extends student{
    public $marks1 = 90;
    public $marks2 = 80;
    public $marks3 = 70;
    public $avg;
    public function avg(){
        $this->avg = ($this->marks1 + $this->marks2 + $this->marks3) / 3;
        echo "<br>" . avg . "<br>";
    }
}

class grade extends result{
    public $grade;
    public function grade(){

        if($this->avg >= 90){
            $this->grade = "A+";
        }elseif($this->avg >= 80){
            $this->grade = "A";
        }elseif($this->avg >= 70){
            $this->grade = "B+";
        }else{
            $this->grade = "C";
        }
        echo "<br>" . grade . "<br>";
    } 
}

$obj1 = new grade;
$obj1->avg();
$obj1->grade();





?>