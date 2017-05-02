<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Products</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <?php   
  require('../Cookies/Validar.php');
     
     if($_SESSION['RolSystem'] == "Student"){      
        echo "Visits of customer: ".$_COOKIE['visitsCustomer'];
        require_once("../Cookies/Time2.php");
     } else if($_SESSION['RolSystem'] == "Administrator") {
       echo "Visits of Administrator: ".$_COOKIE['visitsAdministrator'];
        require_once("../Cookies/Time.php");         
     } else if($_SESSION['RolSystem'] == "Employee") {    
       echo "Visits of employee: ".$_COOKIE['visitsEmployee'];
        require_once("../Cookies/Time.php");         
     }      
    ?>

     <br><a href="SectionMain.php" class="btn btn-warning">Back to main section.</a>
     <a href="../Cookies/CloseSession.php" class="btn btn-danger">Close session</a>
</body>
</html>
