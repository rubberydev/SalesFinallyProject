
<?php
require("../Models/Product.php");

$proid = $_POST['prodID'];
$nam = filter_input(INPUT_POST, 'nam', FILTER_SANITIZE_SPECIAL_CHARS);
$descrip = filter_input(INPUT_POST, 'des', FILTER_SANITIZE_SPECIAL_CHARS);
$quant= $_POST['quan'];
$cos = $_POST['cos'];

$UpdProduct = new Product();
$UpdProduct->setIdentification($proid);
$UpdProduct->setName($nam);
$UpdProduct->setDescription($descrip);
$UpdProduct->setQuantity($quant);
$UpdProduct->setCost($cos);
$UpdProduct->UpdateProduct();

?>