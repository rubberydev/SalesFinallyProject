<?php
class dbConnection{
    public static function connectedDB(){
            $conexion = new mysqli('localhost', 'root','479574579dbsbdb:6yk', 'FirstConnection');
            if($conexion->connect_error) {
                echo "Sorry, there was an error in the connection with the database";
                exit();
            } else {
                //echo "Succesful connection. <br>";
                return $conexion;
            }
        }
    }
?>