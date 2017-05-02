<?php
 require("Validar.php");
 if(isset($_COOKIE['visitsStudent']))
       { 
        //dura un año la cookie                            days*hh*mm*ss
        setcookie('visitsStudent', $_COOKIE['visitsStudent'], time()+365*24*60*60); 
        //echo "visits of student: ".$_COOKIE['visitsStudent']."<br>"; 
        }else{ 
        setcookie('visitsStudent',1,time()+365*24*60*60); 
        //echo "visits of student: ".$_COOKIE['visitsStudent']."<br>"; 
        }

?>