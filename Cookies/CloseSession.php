<?php
require("Validar.php");
session_unset();
session_destroy();
header("location:../Login.php");

?>