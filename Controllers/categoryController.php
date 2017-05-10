<?php
require("../Models/Category.php");

$catid = $_POST['CategoryID'];
$name = filter_input(INPUT_POST, 'CategoryName', FILTER_SANITIZE_SPECIAL_CHARS);
$disc = $_POST['discount'];//100;

$objCategory = new Category();
$objCategory->setCategoryName($name);
$objCategory->setDiscount($disc);
$objCategory->registerCategory();

?>