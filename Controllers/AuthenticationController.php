<?php
require_once("../Models/LogUp.php");

$FieldUser = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$Fieldpass = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_SPECIAL_CHARS);
$UserRol = $_POST['rol'];

$validLogin = new SignUp();
$validLogin->setUser($FieldUser);
$validLogin->setPassword($Fieldpass);

$validLogin->ValidateUser();

?>