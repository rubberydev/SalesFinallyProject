<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <?php 
    
  require('Validar.php');
     
     if($_SESSION['RolSystem'] == "Student"){
       
        echo "visits of student: ".$_COOKIE['visitsStudent'];
        require_once("Time2.php");

     }else if($_SESSION['RolSystem'] == "Teacher"){
          
       echo "visits of teacher: ".$_COOKIE['visitsTeacher'];
        require_once("Time.php");         

     }else if($_SESSION['RolSystem'] == "Employee"){
          
       echo "visits of employee: ".$_COOKIE['visitsEmployee'];
        require_once("Time.php");         

     }
         
        ?>

     <br><a href="SectionMain.php" class="btn btn-warning">Back to main section.</a>
     <a href="CerrarSesion.php" class="btn btn-danger">Close session</a>
</body>
</html>
