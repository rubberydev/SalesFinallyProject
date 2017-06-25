<?php
require("../Models/Product.php");

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];
$category = $_POST['category'];

$objProduct = new Product();
$objProduct->setName($name);
$objProduct->setDescription($description);
$objProduct->setQuantity($quantity);
$objProduct->setCost($cost);
$objProduct->setCategory($category);
$objProduct->registerProduct();


?>