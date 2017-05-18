<?php
require_once("../Models/LogUp.php");

$FieldUser = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$Fieldpass = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_SPECIAL_CHARS);
$FieldRol = $_POST['rol'];

$instUser = new SignUp();
$instUser->setUser($FieldUser);
$instUser->setPassword($Fieldpass);
$instUser->setRol($FieldRol);
$instUser->registerUser();

//Julian Herrera - Luis Alejandro Ramirez
?>