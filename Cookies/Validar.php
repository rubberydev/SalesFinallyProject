
<?php
session_start();
if(!isset($_SESSION)){
print'<script>Error2();</script>';
header("refresh:1 url=/ProyectoPHP/Login.php");
}
?>
