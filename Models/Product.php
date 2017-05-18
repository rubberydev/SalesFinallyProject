<!DOCTYPE html>
<html lang="en">
<head>
    <meta charget="UTF-8">
    <link rel="stylesheet" href="../css/Styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    <title>Product</title>
    <script>
         function ProductRegistered(name, disc){
               swal({
                    title: "Done!",
                    text: "Product Registered: The product "+name+" has been registered with a price of $"+disc,
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

            function ProductDeleted(id, name){
               swal({
                    title: "Done!",
                    text: "Product Deleted: The Product "+name+" with ID "+id+" has been deleted successfully.",
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

            function Update(name){
               swal({
                    title: "Done!",
                    text: "Product Updated: The Product "+name+" has been updated successfully.",
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
require('../Cookies/Validar.php');

class Product {
    private $name;
    private $description;
    private $quantity;
    private $cost;
    private $category;
    private $con;

    public function __construct() {
        $this->con = dbConnection::connectedDB();
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

    public function setCategory($cat) {
        $this->category = $cat;
    }

    public function registerProduct() {
        $custID = $_SESSION['userID'];
        
        $discSQL = "SELECT * FROM Category WHERE CategoryID = '$this->category'";
        $discRes = $this->con->query($discSQL);
        if($discRes->num_rows > 0) {
            while($logDisc = $discRes->fetch_assoc()){
                $this->cost = $this->cost - ($this->cost * $logDisc['Discount']);
            }
        }

        $insertSQL = "INSERT INTO Products(name, description, quantity, cost, categID, customID) VALUES('$this->name','$this->description','$this->quantity', '$this->cost', '$this->category', '$custID')";

        $res = $this->con->query($insertSQL);

        if($res) {
            echo '<script>ProductRegistered("'.$this->name.'","'.$this->cost.'");</script>';
        } else {
            echo "Registry failed.";            
            exit();
        }
         $this->con->close();
    }

    public function SearchProductById($id){
        $QueryResult = "SELECT * FROM Products WHERE productID = '$id'";
        $statement = $this->con->query($QueryResult);
        
        if($statement->num_rows>0){
            while($res = $statement->fetch_assoc()){
                echo "<br>".$res["name"]."<br>".$res["description"]."<br>".$res["quantity"]."<br>".$res["cost"];
            }
        }
    }

    public function DeleteProductById($id, $name) {
        $deleteSQL = "DELETE FROM Products WHERE productID = '$id'";
        $sqlResult = $this->con->query($deleteSQL);

        if($sqlResult) {
            echo '<script>ProductDeleted("'.$id.'","'.$name.'");</script>';
        } else {
            echo "Deletion failed.";
            exit();
        }
         $this->con->close();
    }

    public function UpdateProduct($prodID){
        $custID = $_SESSION['userID'];

        $discSQL = "SELECT * FROM Category WHERE CategoryID = '$this->category'";
        $discRes = $this->con->query($discSQL);
        if($discRes->num_rows > 0) {
            while($logDisc = $discRes->fetch_assoc()){
                $this->cost = $this->cost - ($this->cost * $logDisc['Discount']);
            }
        }
        $Set = "UPDATE Products SET name = '$this->name', description = '$this->description', quantity = '$this->quantity', cost = '$this->cost', categID = '$this->category', customID = '$custID' WHERE productID = '$prodID'";
        
        if($this->con->query($Set)){
            echo "<script>Update('".$this->name."');</script>";
        } else {
            echo "<script>ErrorUpdate();</script>";
        }
        $this->con->close();
    }
    
    public function ShowListProduct(){
            $QueryResult = "SELECT * FROM Products";
            $statement = $this->con->query($QueryResult);
        ?>
        <div id="container-table">
        <table class="table table-striped table-hover table-responsive table-bordered">
            <thead>
              <tr>
                 <th>Id Product</th>
                 <th>Name</th>
                 <th>Description</th>
                 <th>Quantity</th>
                 <th>Cost</th>
                 <th>Category</th>
                 <th><th>
              </tr>             
            </thead>
            <tbody>
            <?php
            if($statement->num_rows > 0){
                while($log = $statement->fetch_assoc()){
                    echo "<tr><form action='../Views/frmModifyProduct.php' id='ShowListProducts' method='post'>";
                    echo "<td><input type='text' name='proID' value='".$log['productID']."' readonly /></td>";
                    echo "<td><input type='text' name='proName' value='".$log['name']."' readonly /></td>";
                    echo "<td><input type='text' name='proDes' value='".$log['description']."' readonly /></td>";
                    echo "<td><input type='text' name='proQuan' value='".$log['quantity']."' readonly /></td>";
                    echo "<td><input type='text' name='proCost' value='".$log['cost']."' readonly /></td>";
                    echo "<td><input type='text' name='proCateg' value='";
                    
                    $cat = $log['categID'];
                    $categResult = "SELECT CategoryName FROM Category WHERE CategoryID= '$cat'";
                    $resCateg = $this->con->query($categResult);

                    if($resCateg->num_rows > 0) {
                        while($logCateg = $resCateg->fetch_assoc()){
                            echo $logCateg['CategoryName'];
                        }
                    }
                    
                    echo "' readonly /></td>";
                    echo "<td><button type='submit' class='glyphicon glyphicon-edit btn btn-warning' data-toggle='tooltip' title='Edit'";
                    if($_SESSION['RolSystem'] == 'Customer') {
                        echo "disabled";
                    } 
                    echo " /></td>";
                    echo "<td><button type='submit' class='glyphicon glyphicon-trash btn btn-danger' data-toggle='tooltip' title='Delete' formaction='../Controllers/DeleteController.php' ";
                    if($_SESSION['RolSystem'] == 'Customer' || $_SESSION['RolSystem'] == 'Employee') {
                        echo "disabled";
                    }
                    echo " /></td>";
                    echo "</form></tr>";
                }
                 $this->con->close();
             }
             ?>
           </tbody>                  
         </table>
         </div>
          <?php
        }
}

//Julian Herrera - Luis Alejandro Ramirez
?>
 <script src="../js/jquery-3.1.1.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.validate.min.js"></script>
 <script src="../js/sweetalert.min.js"></script>
 <script src="../js/Tooltip.js"></script>
 <script src="../js/ControlDel.js"></script>
</body>
</html>