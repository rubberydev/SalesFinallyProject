<?php
require("Validar.php");
session_unset();
session_destroy();
header("refresh:1 url=../Login.php");

//Julian Herrera - Luis Alejandro Ramirez - Alexis Hernandez
?>