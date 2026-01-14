<?php
// class fruit{
//     public $name;
//     protected $color;
//     private $taste;
// }
// $mango = new fruit;
// echo $mango->name = "Mango" . "<br>"; // public property can be accessed outside the class
// echo $mango->color = "Yellow" . "<br>"; // protected property cannot be accessed outside the class
// // echo  $mango->taste = "Sweet" . "<br>; // private property cannot be accessed outside the class
class fruit{
    public $name;
    public $color;
    public $weight;

    public function setName($name){
        $this->name = $name;
    }
    protected function setColor($color){
        $this->color = $color;
    }
    private function setWeight($weight){
        $this->weight = $weight;
    }
}
$mango = new fruit;
$mango->setName("Mango"); // public method can be accessed outside the class
//  $mango->setColor("Yellow"); // protected method cannot be accessed outside the class
//  $mango->setWeight("200g"); // private method cannot be accessed outside the class

?>