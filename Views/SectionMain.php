<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main menu</title> 
    <link rel="stylesheet" href="../css/normalize.css">   
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Styles.css">
    <script>
         function WrongRol(){
               swal({
                    title: "Warning!",
                    text: "Section not available.",
                    type: "warning",
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
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <header>
            <h1>Welcome Dear <?php 
          include("../Cookies/Validar.php");
          echo $_SESSION['RolSystem'];
          ?>!!</h1>
          <?php 
          if($_SESSION['control2'] == true){
               $_SESSION['control2'] = false;
               require_once("../Cookies/CookieVisits.php");
               echo "<strong>Visits of users: </strong>".$_COOKIE['Countvisits'];  
          } else {
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
           <li role="presentation"><a href="frmRegisterCategory.php">Register Category</a></li>
           <li role="presentation"><a  href="salesGraphic.php">Graphic</a></li>
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
     
     <script src="../js/sweetalert.min.js"></script>
     
</body>
</html>