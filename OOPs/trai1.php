<?php

trait hello{
    public function message1(){
        echo "Hello from hello trait!" . "<br>";
    }
}
trait world{
    public function message2(){
        echo "Hello from world trait!" . "<br>";
    }
}

class abc{
    use hello;
}

class abcd{
    use hello, world;
}

$obj = new abc();
$obj->message1(); // Output: Hello from hello trait!
echo "********************" . "<br>";

$obj2 = new abcd();
$obj2->message1(); // Output: Hello from hello trait!
$obj2->message2(); // Output: Hello from world trait!









?>