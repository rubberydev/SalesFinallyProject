<?php
 require("Validar.php");
 if(isset($_COOKIE['visitsEmployee'])){ 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitsEmployee', $_COOKIE['visitsEmployee']+1, time()+365*24*60*60);
        }else{ 
        setcookie('visitsEmployee',1,time()+365*24*60*60); 
        }
?>