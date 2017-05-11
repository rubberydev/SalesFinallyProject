<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Register Category</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">  
 </head>
 <body>
 <section style="margin:5px;">
 <div class="container">
    <div class="row">
      <div class="col-sm-5">
     <?php
     
    require_once('../Cookies/Validar.php');
     echo "<div class='panel panel-default'><div class='panel-body'>";
        if($_SESSION['RolSystem'] == "Customer" && $_SESSION['control'] == false){
             echo "<strong>Your current visit start at: </strong>". $_COOKIE['LastVisitCustomer']. "<strong> dear customer</strong>"; 
        }else if ($_SESSION['RolSystem'] == "Administrator" && $_SESSION['control'] == false){
             echo "<strong>Your current visit start at: </strong>". $_COOKIE['LastVisitAdministrator']."<strong> dear Administrator</strong>";
        }else if ($_SESSION['RolSystem'] == "Employee" && $_SESSION['control'] == false){
            echo "<strong>Your current visit start at: </strong>". $_COOKIE['LastVisitEmployee']." <strong>dear Employee</strong>";
        } 


        if($_SESSION['RolSystem'] == "Customer" && $_SESSION['control'] == true){ 
            $_SESSION['control'] = false;           
            echo "<strong>Date your last visit dear customer: </strong>". $_COOKIE['LastVisitCustomer']; 
            $LastDate =  date("Y-n-j H:i:s");  
            setcookie('LastVisitCustomer', $LastDate ,time()+365*24*60*60);                    
            require_once("../Cookies/Time2.php");
        } else if($_SESSION['RolSystem'] == "Administrator" && $_SESSION['control'] == true) {  
             $_SESSION['control'] = false;           
            echo "<strong>Your last visit dear Administrator: </strong>". $_COOKIE['LastVisitAdministrator']; 
            $LastDate =  date("Y-n-j H:i:s");  
            setcookie('LastVisitAdministrator', $LastDate ,time()+365*24*60*60);

            require_once("../Cookies/Time.php");         
        } else if($_SESSION['RolSystem'] == "Employee" && $_SESSION['control'] == true) {  
             $_SESSION['control'] = false;           
            echo "<strong>Your last visit dear employee: </strong>". $_COOKIE['LastVisitEmployee']; 
            $LastDate =  date("Y-n-j H:i:s");  
            setcookie('LastVisitEmployee', $LastDate ,time()+365*24*60*60);
            
            require_once("../Cookies/Time.php");         
        }
        
    echo " </div></div></div><div class='col-sm-4 col-sm-offset-3'>";
    echo "<a href='SectionMain.php' class='btn btn-primary'><span class='glyphicon glyphicon-arrow-left'></span> Back to main Section</a>
    <a href='../Cookies/CloseSession.php' class='btn btn-danger'>Close session <span class='glyphicon glyphicon-off'></span></a>";
    echo "</div></div></div><br>";
        ?>
<div class="container">
  <div class="row">     
        <div class="panel panel-default">
            <div class="panel-body">
             <h2>Type information of Category</h2><br><hr>
                <form action="../Controllers/categoryController.php" method="post">
            <div class="col-sm-5">
                <!--<div class="form-group">
                    <label>Category ID: </label><br>
                    <input type="number" class="form-control" name="CategoryID" required/>
                </div>-->
                <div class="form-group">
                    <label>Name: </label><br>
                    <input type="text" class="form-control" placeholder="Name" name="CategoryName" required/>
                </div> 
                <input type="submit" name="Send" value="Save" class="btn btn-success"/> <input type="reset" class="btn btn-danger" name="Clean"/>
           </div>
           <div class="col-sm-5 col-sm-offset-2">
                <div class="form-group">
                    <label>Discount(%): </label><br>
                    <input type="number" class="form-control" name="discount" value="0" required/>
                </div>
            </div>                
                </form>
          </div>
       </div>    
  </div>
</div> 
</section>    
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>