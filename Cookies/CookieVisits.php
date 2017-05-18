<?php
 //require("Validar.php");
 if(($_COOKIE['Countvisits'] != null))
       { 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('Countvisits', $_COOKIE['Countvisits']+1, time()+365*24*60*60); 
        }else{ 
        setcookie('Countvisits',1,time()+365*24*60*60); 
        }

//Julian Herrera - Luis Alejandro Ramirez
?>