<?php



$products = array(
    array("name"=> "Laptop", "price" => 1000, "stock" => 5),
    array("name"=> "Smartphone", "price" => 500, "stock" => 10),
    array("name"=> "Tablet", "price" => 300, "stock" => 0),
    array("name"=> "Headphones", "price" => 100, "stock" => 20),
);
// print_r($products);

function listPRoducts($products){
    echo "PRODUCTS LIST:<br>";
    foreach($products as $p){
        echo "Product name: ". $p["name"] ."  ";
        echo "Product price: ". $p["price"] . "   " ;
        echo "Product stock: ". $p["stock"] . "<br>";
    }
}
listPRoducts($products);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    foreach($products as $p){
        if($p['name'] == $name){
            
            echo "Product found!<br>";
        }
    }
}


?>


<form action="" method="POST">
    <input type="text" name="name" placeholder="Product Name">
    <input type="submit" name="submit" value="Find Product">

</form>
