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
                title: "There was an error when the system tried to connect to the database!",
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
            $conexion = new mysqli('localhost', 'root','', 'DB_SportWear');
            if($conexion->connect_error) {
                echo "<script>Error();</script>";
                exit();
            } else {
                
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