<?php

$order1 =  array("name"=>"laptop","quantity"=>2,"price"=>50000);
$order2 =  array("name"=>"mouse","quantity"=>5,"price"=>200);
$order3 = array("name"=>"keyboard","quantity"=>3,"price"=>12000);

$sum = 0;
$count = 0;

function processOrders($arr){
    global $sum;
    global $count;
    $sum += $arr['quantity'] * $arr['price'];
    $count += $arr['quantity'];
}

processOrders($order1);
processOrders($order2);
processOrders($order3);

$newarr = array("total_amount"=>$sum,"total_items"=>$count);

print_r($newarr);



?>

