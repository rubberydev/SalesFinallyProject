 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Register Product</title>
     <link rel="stylesheet" href="../css/bootstrap.css">    
 </head>
 <body>
     <?php
    require('Validar.php');
     
     if($_SESSION['RolSystem'] == "Student"){
        echo "visits of student: ".$_COOKIE['visitsStudent'];
        require_once("Time2.php");
     } else if($_SESSION['RolSystem'] == "Teacher") {
       echo "visits of teacher: ".$_COOKIE['visitsTeacher'];
        require_once("Time.php");         
     } else if($_SESSION['RolSystem'] == "Employee") {
       echo "visits of employee: ".$_COOKIE['visitsEmployee'];
        require_once("Time.php");         
     }
        ?>
        <section>
        <form action="../Controllers/productController.php" method="post">
        <p><label>Product ID: </label><input type="number" name="productID" required/></p>
        <p><label>Name: </label><input type="text" name="nombre" required/></p>
        <p><label>Description: </label><input type="text" name="description" required/></p>
        <p><label>Quantity: </label><input type="number" name="quantity" required/></p>
        <p><label>Cost: </label><input type="number" name="cost" required/></p>
        <p><input type="submit" name="Enviar"/><input type="reset" name="Limpiar"/></p> 
        </form>
        </section>
    <br><a href="SectionMain.php" class="btn btn-warning">return to back</a>
       <a href="CerrarSesion.php" class="btn btn-danger">Close session</a>
 </body>
 </html>