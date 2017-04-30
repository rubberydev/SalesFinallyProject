<?php
 require("Validar.php");
 if(isset($_COOKIE['visitsTeacher']))
       { 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitsTeacher', $_COOKIE['visitsTeacher']+1, time()+365*24*60*60); 
        }else{ 
        setcookie('visitsTeacher',1,time()+365*24*60*60); 
        }
?>