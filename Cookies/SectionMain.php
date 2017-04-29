<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main menu</title>
    <link rel="stylesheet" href="../css/Normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/Styles.css">
    
    <script>
    
    </script>
</head>
<body>
    
    <div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
        <header>
            <h1>Welcome Dear <?php 
          require("Validar.php");
          echo $_SESSION['RolSystem'];
          ?> !!</h1>
        </header>
      </div>
  </div>
</div>
<section>
 <div class="container-fluid">
    <div class="row">
       <div class="col-sm-4">
             <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="frmRegisterProduct.php">Register Product</a></li>
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
 <footer>    
     <a href="CerrarSesion.php" class="btn btn-danger">Close section</a>
</footer>
</body>
</html>