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
                        <input type="text"  class="form-control" name="prodID" required/>
                    </div>
                    <div class="form-group">
                        <label>Name: </label><br>
                        <input type="text" class="form-control" placeholder="Name" name="nam" required/>
                    </div>
                    <div class="form-group">
                        <label>Description: </label><br>
                        <textarea name="desc" cols="50" rows="2" required></textarea>
                        <!--<input type="text" class="form-control" placeholder="Description" name="description" required/>!-->
                    </div>  
                    <input type="submit" name="Send" value="Save" class="btn btn-success"/> <input type="reset" class="btn btn-danger" name="Clean"/>
              </div>
              <div class="col-sm-5 col-sm-offset-2">
                    <div class="form-group">
                        <label>Quantity: </label><br>
                        <input type="number" class="form-control" name="quant" required/>
                    </div>
                    <div class="form-group">
                        <label>Cost: </label><br>                
                        <input type="number" class="form-control" name="cos" required/></p>
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
