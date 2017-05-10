<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Products</title>
    <link rel="stylesheet" href="../css/normalize.css">   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Styles.css">
</head>
<body>
    <?php
    $prodID = $_POST['proID'];
    $name = $_POST['proName'];
    $des = $_POST['proDes'];
    $quan = $_POST['proQuan'];
    $cost = $_POST['proCost'];

    if($_POST['proCateg'] == "T-Shirt") {
        $categ = 1;
    } else if ($_POST['proCateg'] == "Pants") {
        $categ = 2;
    } else if ($_POST['proCateg'] == "Runners") {
        $categ = 3;
    } else if ($_POST['proCateg'] == "Accesories") {
        $categ = 4;
    } else {
        $categ = 5;
    }
  /*require('../Cookies/Validar.php');
     
     if($_SESSION['RolSystem'] == "Student"){      
        echo "Visits of customer: ".$_COOKIE['visitsCustomer'];
        require_once("../Cookies/Time2.php");
     } else if($_SESSION['RolSystem'] == "Administrator") {
       echo "Visits of Administrator: ".$_COOKIE['visitsAdministrator'];
        require_once("../Cookies/Time.php");         
     } else if($_SESSION['RolSystem'] == "Employee") {    
       echo "Visits of employee: ".$_COOKIE['visitsEmployee'];
        require_once("../Cookies/Time.php");         
     }    */ 
    ?>
    <div class="container-fluid">
       <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
             <h2>Edit product</h2><br><hr>
              <form action="../Controllers/UpdateController.php" method="post">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Product ID: </label><br>
                        <input type="number"  class="form-control" name="prodID" value="<?php
                            echo $prodID;
                        ?>" required readonly />
                    </div>
                    <div class="form-group">
                        <label>Name: </label><br>
                        <input type="text" class="form-control" placeholder="Name" name="nam" value="<?php
                            echo $name;
                        ?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Description: </label><br>
                        <textarea rows="2" cols="65" name="des" required><?php
                            echo $des;
                        ?></textarea>
                    </div>  
                    <input type="submit" name="Send" value="Save" class="btn btn-success"/> <input type="reset" class="btn btn-danger" name="Clean"/>
              </div>
              <div class="col-sm-5 col-sm-offset-2">
                    <div class="form-group">
                        <label>Quantity: </label><br>
                        <input type="number" class="form-control" name="quan" value="<?php
                            echo $quan;
                        ?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Cost: </label><br>                
                        <input type="number" class="form-control" name="cos" value="<?php
                            echo $cost;
                        ?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Category: </label><br>
                        <select class="selectpicker" name="categ">
                            <option value="1" <?php if($categ == 1) { echo "selected";}?>>T-Shirt</option>
                            <option value="2" <?php if($categ == 2) { echo "selected";}?>>Pants</option>
                            <option value="3" <?php if($categ == 3) { echo "selected";}?>>Runners</option>
                            <option value="4" <?php if($categ == 4) { echo "selected";}?>>Accesories</option>
                            <option value="5" <?php if($categ == 5) { echo "selected";}?>>Protectors</option>
                        </select>
                    </div>  
                </div>
              </form>
          </div>
       </div> 
     </div>
  </div>

     <script src="../js/bootstrap.min.js"></script>
     <br><a href="../Views/SectionMain.php" class="btn btn-warning">Back to main section</a>
     <a href="../Cookies/CloseSession.php" class="btn btn-danger">Close session</a>
</body>
</html>
