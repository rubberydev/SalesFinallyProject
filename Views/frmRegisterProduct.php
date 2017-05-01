 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Register Product</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">  
 </head>
 <body>
 <section style="margin:5px;">
 <div class="container">
    <div class="row">
      <div class="col-sm-5">
     <?php
    require('../Cookies/Validar.php');
     echo "<div class='panel panel-default'><div class='panel-body'>";
        if($_SESSION['RolSystem'] == "Student"){
            echo "<strong>visits of student: </strong>".$_COOKIE['visitsStudent'];
            require_once("../Cookies/Time2.php");
        } else if($_SESSION['RolSystem'] == "Teacher") {
        echo "<strong>visits of teacher: </strong>".$_COOKIE['visitsTeacher'];
            require_once("../Cookies/Time.php");         
        } else if($_SESSION['RolSystem'] == "Employee") {
        echo "<strong>visits of employee: </strong>".$_COOKIE['visitsEmployee'];
            require_once("../Cookies/Time.php");         
        }
    echo " </div></div></div><div class='col-sm-4 col-sm-offset-3'>";
    echo "<a href='SectionMain.php' class='btn btn-primary'><span class='glyphicon glyphicon-arrow-left'></span> Back to main Section</a>
    <a href='../Cookies/CloseSession.php' class='btn btn-danger'>Close session <span class='glyphicon glyphicon-off'></span></a>";
    echo "</div></div></div><br>";
        ?>
<div class="container">
  <div class="row">     
        <div class="panel panel-default">
            <div class="panel-body">
             <h2>Type information of product</h2><br><hr>
                <form action="../Controllers/productController.php" method="post">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Product ID: </label><br>
                    <input type="number" class="form-control" name="productID" required/>
                </div>
                <div class="form-group">
                    <label>Name: </label><br>
                    <input type="text" class="form-control" placeholder="Name" name="name" required/>
                </div>
                 <div class="form-group">
                    <label>Description: </label><br>
                    <textarea name="description" cols="50" rows="2" required></textarea>
                    <!--<input type="text" class="form-control" placeholder="Description" name="description" required/>!-->
                </div>  
                <input type="submit" name="Send" value="Save" class="btn btn-success"/> <input type="reset" class="btn btn-danger" name="Clean"/>
           </div>
           <div class="col-sm-5 col-sm-offset-2">
                <div class="form-group">
                    <label>Quantity: </label><br>
                    <input type="number" class="form-control" name="quantity" required/>
                </div>
                <div class="form-group">
                    <label>Cost: </label><br>                
                    <input type="number" class="form-control" name="cost" required/></p>
                </div> 
            </div>               
                    
                </form>
          </div>
       </div>    
  </div>
</div> 
</section>    
    
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>