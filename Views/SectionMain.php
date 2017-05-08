<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main menu</title> 
    <link rel="stylesheet" href="../css/normalize.css">   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Styles.css">   
</head>
<body>    
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <header>
            <h1>Welcome Dear <?php 
          require("../Cookies/Validar.php");
          echo $_SESSION['RolSystem'];
          ?>!!</h1>
          <?php 
          if($_SESSION['control2'] == true){
               $_SESSION['control2'] = false;
               require_once("../Cookies/CookieVisits.php");
               echo "<strong>Visits of users: </strong>".$_COOKIE['Countvisits'];  
          }else{
              echo "<strong>Visits of users: </strong>".$_COOKIE['Countvisits']; 
          }     
          ?>
        </header>
      </div>
  </div>
<section> 
    <div class="row">
       <div class="col-sm-4">
           <ul class="nav nav-tabs">
           <li role="presentation"><a href="frmRegisterProduct.php">Register Product</a></li>
                <li role="presentation"><a  href="Opcion2.php">Opcion2</a></li>
                <li role="presentation"><a  href="Opcion3.php">Opcion3</a></li>
          </ul>
        </div>
    </div>
 </div> 
 
  <?php 
  require("../Models/Product.php"); 
  $InstanciaProduct = new Product();
  $InstanciaProduct->ShowListProduct();   
       ?> 

 </section>
     <script src="../js/bootstrap.min.js"></script>
    <div id="container-table">
        <a href="../Cookies/CloseSession.php" class="btn btn-danger">Close session</a>
    </div>
</body>
</html>