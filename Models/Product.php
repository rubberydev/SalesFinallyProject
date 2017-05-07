<!DOCTYPE html>
<html lang="en">
<head>
    <meta charget="UTF-8">
    <link rel="stylesheet" href="../css/Styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    <title>Product</title>
    <script>
         function ProductRegistered(name){
               swal({
                    title: "Done!",
                    text: "Product: "+name+" has been saved successfully.",
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

            function Update(){
               swal({
                    title: "Done!",
                    text: "Product has been updated successfully.",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "green",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Views/SectionMain.php';
                    });
            } 
             function ErrorUpdate(){
               swal({
                    title: "Error!",
                    text: "This product couldn't be updated",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonColor: "green",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Views/SectionMain.php';
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

    public function getIdentification() {
         return $this->productID;
    }

    public function getName() {
         return $this->name;
    }

    public function getDescription() {
         return $this->description;
    }

    public function getQuantity() {
         return $this->quantity;
    }

    public function getCost() {
         return $this->cost;
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

    public function SearchProductById($id){
        $QueryResult = "SELECT * FROM tblproductos WHERE productID = '$id'";
        $statement = $this->con->query($QueryResult);
        
        if($statement->num_rows>0){
            while($res = $statement->fetch_assoc()){
                echo "<br>".$res["name"]."<br>".$res["description"]."<br>".$res["quantity"]."<br>".$res["cost"];
            }
        }
        //return $statement;
    }

    public function UpdateProduct(){
        $Set = "UPDATE tblproductos SET name = '$this->name', description = '$this->description', quantity = '$this->quantity', cost = '$this->cost' WHERE productID = $this->productID";
        
        if($this->con->query($Set) == true){
            echo "<script>Update();</script>";
        }else{
            echo "<script>ErrorUpdate();</script>";
        }
        $this->con->close();
    }
        public function ShowListProduct(){
            $QueryResult = "SELECT * FROM tblproductos";
            $statement = $this->con->query($QueryResult);
        ?>
        <!--<form action="../Controllers/UpdateController.php" method="post">!-->
        <div id="container-table">
        <table class="table table-striped table-hover table-responsive table-bordered">
            <thead>
              <tr>
                 <th>Id Product</th>
                 <th>Name</th>
                 <th>Description</th>
                 <th>Quantity</th>
                 <th>Cost</th>
                 <th><th>
              </tr>             
            </thead>
            <tbody>
            <?php
                 if($statement->num_rows>0){
                     while($log = $statement->fetch_assoc()){
                         echo "<tr>";
                           echo "<td>".$log['ProductID']." </td>";
                           echo "<td>".$log['name']." </td>";
                           echo "<td>".$log['description']." </td>";
                           echo "<td>".$log['quantity']." </td>";
                           echo "<td>".$log['cost']." </td>";
                           //echo "<td><input  type='submit' class='btn btn-warning' value='Edit' data-toggle='tooltip' title='Editar'/></td>";
                           echo "<td><a  class='btn btn-warning' data-toggle='tooltip' title='Editar' href='../Views/Opcion2.php'><span class='glyphicon glyphicon-edit'></span></a></td>";
                           echo "<td><a class='btn btn-danger' data-toggle='tooltip' title='Borrar' href='../Views/Opcion2.php'><span class='glyphicon glyphicon-trash'></span></a></td>";
                         echo "<tr>";
                     }
                     $this->con->close();
                 }
             ?>
           </tbody>                  
         </table>
         </div>
         <!--</form>!-->
          <?php
        
        }
}
?>
 <script src="../js/jquery-3.1.1.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="../js/sweetalert.min.js"></script>
 <script src="../js/Tooltip.js"></script>
</body>
</html>