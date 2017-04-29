<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main menu</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Styles.css">   
</head>
<body>    
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <header>
<<<<<<< HEAD
            <h1>Welcome Dear <?php 
          require("Validar.php");
=======
            <h1>welcome dear <?php 
          require("../Cookies/Validar.php");
>>>>>>> 0a0bd1795eb68a9a393f3840a3397a34174caf84
          echo $_SESSION['RolSystem'];
          ?>!!</h1>
        </header>
      </div>
  </div>
</div>
<section>
 <div class="container-fluid">
    <div class="row">
       <div class="col-sm-4">
<<<<<<< HEAD
           <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="frmRegisterProduct.php">Register Product</a></li>
=======
           <ul class="nav nav-tabs">
                <li role="presentation"><a href="Opcion1.php">Opcion1</a></li>
>>>>>>> 0a0bd1795eb68a9a393f3840a3397a34174caf84
                <li role="presentation"><a  href="Opcion2.php">Opcion2</a></li>
                <li role="presentation"><a  href="Opcion3.php">Opcion3</a></li>
          </ul>
        </div>
    </div>
 </div>  
  <?php 
  
  require("../Connection/stringConnection.php"); 
 
       ?>                 
 </section>
<<<<<<< HEAD
       
     <a href="CerrarSesion.php" class="btn btn-danger">Close session</a>
=======
       <script src="../js/bootstrap.min.js"></script>
     <a href="../Cookies/CerrarSesion.php" class="btn btn-danger">Close section</a>
>>>>>>> 0a0bd1795eb68a9a393f3840a3397a34174caf84
</body>
</html>