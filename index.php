<?php
require_once 'Model/product.class.php';


$product = new Product("Sabonete", "Dove", "Higiene", 2);
$product2 = new Product("Sabão em pó", "Omo", "Limpeza", 8);

var_dump($product);
var_dump($product2);

$product2->setName("Agua");
var_dump($product2);
