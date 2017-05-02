<?php
 require("Validar.php");
 if(isset($_COOKIE['visitEmployee'])){ 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitEmployee', $_COOKIE['visitEmployee']+1, time()+365*24*60*60);
        }else{ 
        setcookie('visitEmployee',1,time()+365*24*60*60); 
        }
?>