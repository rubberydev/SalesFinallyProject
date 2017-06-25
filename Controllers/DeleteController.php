<?php
require("../Models/Product.php");

$proid = $_POST['proID'];
$nam = filter_input(INPUT_POST, 'proName', FILTER_SANITIZE_SPECIAL_CHARS);

$DelProduct = new Product();

$DelProduct->DeleteProductById($proid, $nam);


?>