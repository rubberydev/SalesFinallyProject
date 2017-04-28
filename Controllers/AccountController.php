<?php
require_once("../Models/LogUp.php");

$FieldUser = $_POST['user'];
$Fieldpass = $_POST['key'];

$instUser = new SignUp();
$instUser->setUser($FieldUser);
$instUser->setPassword($Fieldpass);

$instUser->registerUser();
?>