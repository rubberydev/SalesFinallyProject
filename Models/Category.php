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
        $this->conex = dbconnection::connectedDB();
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
}

?>
</body>
</html>