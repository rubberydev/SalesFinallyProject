<?php
class dbConnection{

public static function connectedDB(){
 
            $conexion = new mysqli('localhost', 'root','7lp3cqmfF4:13', 'FirstConnection');

            if($conexion->connect_error) {
                echo "we felt, there was an error in the connection with the database";
                exit();
            } else {
                echo "Succesful connection. <br>";
                return $conexion;
            }
        }
   }

?>