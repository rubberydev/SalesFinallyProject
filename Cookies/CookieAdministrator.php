<?php
 require("Validar.php");
 if(isset($_COOKIE['visitsAdministrator']))
       { 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitsAdministrator', $_COOKIE['visitsAdministrator']+1, time()+365*24*60*60); 
        }else{ 
        setcookie('visitsAdministrator',1,time()+365*24*60*60); 
        }
?>