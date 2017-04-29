<?php
require('../Connection/stringConnection.php');

class Product {
    private $productID;
    private $name;
    private $description;
    private $quantity;
    private $cost;
    private $con;

    public function __construct() {
        $this->con = dbConnection::connectedDB();
    }

    public function setIdentification($nroid) {
        $this->productID = $nroid;
    }

    public function setName($nomb) {
        $this->name = $nomb;
    }

    public function setDescription($des) {
        $this->description = $des;
    }

    public function setQuantity($quant) {
        $this->quantity = $quant;
    }

    public function setCost($cos) {
        $this->cost = $cos;
    }

    public function registerProduct() {
        $insertSQL = "INSERT INTO tblproductos(productID, nombre, description, quantity, cost) VALUES(
            '$this->productID','$this->nombre','$this->description','$this->quantity', '$this->cost')";

        $res = $this->con->query($insertSQL);

        if($res) {
            echo "Product registered.";
        } else {
            echo "Registry failed.";
            exit();
        }
    }
}

?>