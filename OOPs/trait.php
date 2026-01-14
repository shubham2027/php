<?php


trait MyTrait { 
    public function sayHello() {
        echo "Hello from MyTrait!" . "<br>";
    }
}
class MyClass {
    use MyTrait; // Using the trait in the class

    public function sayGoodbye() {
        echo "Goodbye from MyClass!" . "<br>";
    }
}

$object = new MyClass();
$object->sayHello(); // Output: Hello from MyTrait!
$object->sayGoodbye(); // Output: Goodbye from MyClass!

class main{
    public function greeting(){
        echo "Welcome to main Class\n". "<br>";
    }

}

trait desiredClass{
    public function welcome(){
        main::greeting(); 
        echo "Welcome to Traits\n" . "<br>";
    }

}

class newClass extends main{

    use desiredClass;
}

$obj1 = new newClass();
$obj1->greeting();
$obj1->welcome();



?>