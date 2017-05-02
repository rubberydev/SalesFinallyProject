<?php
 require("Validar.php");
 if(isset($_COOKIE['visitsCustomer']))
       { 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitsCustomer', $_COOKIE['visitsCustomer'], time()+365*24*60*60); 
        //echo "visits of student: ".$_COOKIE['visitsStudent']."<br>"; 
        }else{ 
        setcookie('visitsCustomer',1,time()+365*24*60*60); 
        //echo "visits of student: ".$_COOKIE['visitsStudent']."<br>"; 
        }

?>