<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    
    <title>Product</title>
    <script>
         function ProductRegistered(name){
               swal({
                    title: "Done!",
                    text: "product: "+name+" has been saved successfully",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "green",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Views/frmRegisterProduct.php';
                    });
            } 
            
   </script>
</head>
<body>
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
        $insertSQL = "INSERT INTO tblproductos(productID, name, description, quantity, cost) VALUES(
            '$this->productID','$this->name','$this->description','$this->quantity', '$this->cost')";

        $res = $this->con->query($insertSQL);

        if($res) {
            echo '<script>ProductRegistered("'.$this->name.'");</script>';
           
        } else {
            echo "Registry failed.";
            
            exit();
        }
         $this->con->close();
    }
}

?>
 <script src="../js/jquery-3.1.1.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="../js/sweetalert.min.js"></script>
</body>
</html>