<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
     <link rel="stylesheet" href="../css/sweetalert.css">
     <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery-3.1.1.js"></script>
     <script> 
            function ErrorRestrict(){
               swal({
                title: "Area restricted for you...",
                text: "You can't enter this area, it's restricted!!!",
                timer: 4000,
                type: "warning",
                showConfirmButton: false
                },
                function(){
                    window.location.href='SectionMain.php';
                    });
            } 
   </script>
</head>
<body>
<?php
  require('../Cookies/Validar.php');
     
     if($_SESSION['RolSystem'] == "Student"){
                   
          echo "<script>ErrorRestrict(); </script>";

     }else if($_SESSION['RolSystem'] == "Teacher"){
          
       echo "visits of teacher: ".$_COOKIE['visitsTeacher'];
        require_once("../Cookies/Time.php");         

     }else if($_SESSION['RolSystem'] == "Employee"){
          
       echo "visits of employee: ".$_COOKIE['visitsEmployee'];
        require_once("../Cookies/Time.php");         

     }
         
        ?>
         <br><a href="SectionMain.php" class="btn btn-warning">Back to main section.</a>
         <a href="../Cookies/CloseSession.php" class="btn btn-danger">Close session</a>
</body>
</html>