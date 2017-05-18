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
    $categ = $_POST['proCateg'];
  
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
                        <label>Category: </label><br>
                        <?php
                        require("../Models/Category.php");
                        $category = new Category();
                        $category->showCategorySelected($categ);
                        ?>
                       
                    </div>  
                    <div class="form-group">
                        <label>Product Name: </label><br>
                        <input type="text" class="form-control" placeholder="product name" name="nam" value="<?php
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
                   
                </div>
              </form>
          </div>
       </div> 
     </div>
  </div>

     <script src="../js/bootstrap.min.js"></script>
     <br><a href="../Views/SectionMain.php" class="btn btn-warning">Back to main section</a>
     <a href="../Cookies/CloseSession.php" class="btn btn-danger">Close session</a>

     <footer>Julian Herrera - Luis Alejandro Ramirez</footer>
</body>
</html>
