<!DOCTYPE html>
<html>
<head>
<meta charget="UTF-8">
    <link rel="stylesheet" href="../css/Styles.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    <title>Category</title>
    <script>
         function CategoryRegistered(name){
               swal({
                    title: "Done!",
                    text: "Category: "+name+" has been saved successfully.",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "green",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Views/frmRegisterCategory.php';
                    });
            }
    </script>
</head>
<body>
<?php
require('../Connection/stringConnection.php');

class Category {

    private $categoryName;
    private $discount;
    private $conex;

    public function __construct() {
        $this->conex = dbConnection::connectedDB();
    }

    public function setCategoryName($name) {
        $this->categoryName = $name;
    }

    public function setDiscount($disc) {
        $this->discount = $disc;
    }

    public function registerCategory() {
        $insertSQL = "INSERT INTO Category(CategoryName, Discount) VALUES('$this->categoryName', '$this->discount')";
        $res = $this->conex->query($insertSQL);

        if($res) {
            echo '<script>CategoryRegistered("'.$this->name.'");</script>';
           
        } else {
            echo "Registry failed.";
            
            exit();
        }
         $this->con->close();
    }

    public function showListCategoryForm() {
        $categResult = "SELECT * FROM Category";
        $resCateg = $this->conex->query($categResult);
        
        if($resCateg->num_rows > 0) {
            echo "<select class='selectpicker' name='category'>";
            while($logCateg = $resCateg->fetch_assoc()){
                $catID = $logCateg['CategoryID'];
                $catName = $logCateg['CategoryName'];
                echo "<option value='$catID'>$catName</option>";
            }
            echo "</select>";
        }
        $this->conex->close();
    }

    public function showCategoryById($catID) {
       $categResult = "SELECT * FROM Category WHERE CategoryID= '$catID'";
        $resCateg = $this->conex->query($categResult);
        
        if($resCateg->num_rows > 0) {
            while($logCateg = $resCateg->fetch_assoc()){
                echo $logCateg['CategoryName'];
            }
        }
        $this->conex->close(); 
    }

    public function ShowListCategory(){
            $QueryResult = "SELECT * FROM Category";
            $statement = $this->conex->query($QueryResult);
        ?>
        <div id="container-table">
        <table class="table table-striped table-hover table-responsive table-bordered">
            <thead>
              <tr>
                 <th>Category ID</th>
                 <th>Category Name</th>
                 <th>Discount</th>
                 <th><th>
              </tr>             
            </thead>
            <tbody>
            <?php
            if($statement->num_rows > 0){
                while($log = $statement->fetch_assoc()){
                    echo "<tr><form action='../Views/frmModifyProduct.php' method='post'>";
                    echo "<td>".$log['CategoryID']."</td>";
                    echo "<td>".$log['CategoryName']."</td>";
                    echo "<td>".$log['discount']."</td>";
                    //echo "<td><button type='submit' class='glyphicon glyphicon-edit btn btn-warning' data-toggle='tooltip' title='Edit' /></td>";
                    //echo "<td><button type='submit' class='glyphicon glyphicon-trash btn btn-danger' data-toggle='tooltip' title='Delete' formaction='../Controllers/DeleteController.php' /></td>";
                    echo "</form></tr>";
                }
                 $this->conex->close();
             }
             ?>
           </tbody>                  
         </table>
         </div>
          <?php
        }
}
?>
</body>
</html>