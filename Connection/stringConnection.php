<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">   
    <title>Log In</title>
     <script> 
            function Error(){
               swal({
                title: "There was an error when the system tried connect to database!",
                text: "Try again",
                type: "warning",
                timer: 5000,
                showConfirmButton: false
                },
                function(){
                 window.location.href="../Login.php";
                });
                
            } 

        
    </script>
</head>
<body> 

<?php
class dbConnection{
    public static function connectedDB(){
            $conexion = new mysqli('localhost', 'lucho','123456', 'FirstConnection');
            if($conexion->connect_error) {
                echo "<script>Error();</script>";
                exit();
            } else {
                //echo "Succesful connection. <br>";
                return $conexion;
            }
        }
    }
?>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>