
<?php
if(isset($_SESSION)){
    echo "Session active";
} else {
    session_start();
}
if(!isset($_SESSION['User']))
{
print'<script>Error2();</script>';
header("refresh:1 url=/ProyectoPHP/Login.php");
}
?>
