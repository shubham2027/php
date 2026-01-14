<?php
//abstract class
abstract class base{
    abstract public function print();
}
class derived extends base{
    public function print(){
        echo "Hello World!";
    }
}
$object = new derived();
$object->print(); // Output: Hello World!










?>