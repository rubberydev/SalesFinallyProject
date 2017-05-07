<?php
require("../Models/Product.php");

$prodid = $_POST['productID'];
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];

$objProduct = new Product();
$objProduct->setIdentification($prodid);
$objProduct->setName($name);
$objProduct->setDescription($description);
$objProduct->setQuantity($quantity);
$objProduct->setCost($cost);
$objProduct->registerProduct();


//$UpdProduct->SearchProductById();
/*
class ProductsController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Product();
    }

    public function UpdateProduct(){
        $Article = new Product();
        
        if(isset($_POST['productID'])){
            $alm = $this->model->Obtener($_POST['productID']);
        }
        
        ///require_once 'view/header.php';
        //require_once 'view/alumno/alumno-editar.php';
    }
}*/
?>