<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">   
    <title>Log In</title>
     <script> 
      function Error5(){
             swal({
                    title: "You must choose a valid username...",
                    text: "Incorrect user!",
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, please try again!",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Login.php';
                    });
            }
   </script>
</head>
<body> 
<?php
require_once("../Models/LogUp.php");

$FieldUser = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$Fieldpass = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_SPECIAL_CHARS);
$UserRol = $_POST['rol'];

$validLogin = new SignUp();
$validLogin->setUser($FieldUser);
$validLogin->setPassword($Fieldpass);
$validLogin->setRol($UserRol);
              if($UserRol == "Customer") { 
                    require_once("../Cookies/CookieVisits.php");                   
                    session_start();
                    $_SESSION['user'] = $FieldUser;
                    $_SESSION['password'] = $Fieldpass;
                    $_SESSION['control'] = true;
                    $_SESSION['control2'] = true;
                    $_SESSION['LastSession'] =  date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $UserRol;                   
                    $validLogin->ValidateUser();

                } else if($UserRol == "Administrator") { 
                    require_once("../Cookies/CookieVisits.php");                   
                    session_start();
                    $_SESSION['user'] = $FieldUser;
                    $_SESSION['password'] = $Fieldpass;
                    $_SESSION['control'] = true;
                    $_SESSION['control2'] = true;
                    $_SESSION['LastSession'] =  date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $UserRol;                   
                    $validLogin->ValidateUser();

                } else if($UserRol == "Employee") { 
                    require_once("../Cookies/CookieVisits.php");                   
                    session_start();
                    $_SESSION['user'] = $FieldUser;
                    $_SESSION['password'] = $Fieldpass;
                    $_SESSION['control'] = true;
                    $_SESSION['control2'] = true;
                    $_SESSION['LastSession'] = date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $UserRol;                    
                    $validLogin->ValidateUser();

                } else if($_POST['rol']=="Select") {
                    echo "<script>Error5();</script>";
                } 

//Julian Herrera - Luis Alejandro Ramirez
?>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>