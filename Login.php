<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="js/sweetalert.min.js"></script>
    <script src="js/jquery-3.1.1.js"></script>
    <title>Log In</title>
     <script> 
            function Error(){
               swal({
                title: "There was an error when the system try connect to database!",
                text: "Try it again",
                timer: 2000,
                showConfirmButton: false
                });
            } 

            function Error2(){
               swal({
                title: "Closed section!",
                text: "Bye",
                timer: 5000,
                showConfirmButton: false
                });
            } 
             function Error3(){
               swal({
                title: "you must select a user valid",
                text: "ACCESS DENIED!",
                timer: 5000,
                showConfirmButton: false
                });
            } 
            function Error5(){
             swal({
                    title: "you must logged again...",
                    text: "incorrect data!",
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes,press try again!",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='';
                    });
            }
    </script>
</head>
<body> 
<?php 
         
         if(isset($_POST['user']) && isset($_POST['key'])){

            if($_POST['user'] == 'julito' && $_POST['key'] == 123){

                if($_POST['rol']=="Student"){
                    require_once("Cookies/CookieStudent.php");
                    session_start();
                    $_SESSION['User'] = $_POST['user'];
                    $_SESSION['password'] = $_POST['key'];
                    $_SESSION['LastSection'] =  date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $_POST['rol'];
                    header("location:Models/SectionMain.php");

                }else if($_POST['rol']=="Teacher"){
                    require_once("Cookies/CookieTeacher.php");
                    session_start();
                    $_SESSION['User'] = $_POST['user'];
                    $_SESSION['password'] = $_POST['key'];
                    $_SESSION['LastSection'] =  date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $_POST['rol'];
                    header("location:Cookies/SectionMain.php");
                }else if($_POST['rol']=="Employee"){
                    require_once("Cookies/CookieEmployee.php");
                    session_start();
                    $_SESSION['User'] = $_POST['user'];
                    $_SESSION['password'] = $_POST['key'];
                    $_SESSION['LastSection'] =  date("Y-n-j H:i:s");
                    $_SESSION['RolSystem'] = $_POST['rol'];
                    header("location:Cookies/SectionMain.php");
                    
                }

            }

        }else{  
   
        


  
?>
<div class="container">
  <div class="row">
     <div class="col-sm-4">
     </div>
          <div class="col-sm-4">             
              <div class="panel panel-default">
                  <div class="panel-body">
                    <form class="form-signin" action="Login.php" method="POST">
                        <h2 class="form-signin-heading">Welcome <strong>!!!</strong></h2>
                        <label for="inputEmail" >User</label><br>
                        <input type="text" id="inputEmail"  name="user" class="form-control" placeholder="user name" ><br>
                        <label for="inputPassword" >Password</label><br>
                        <input type="password" id="inputPassword"  class="form-control" name="key" placeholder="Password">
                        <div class="checkbox">
                            <select name="rol" id="">
                                <option>Select</option>
                                <option>Student</option>
                                <option>Teacher</option>
                                <option>Employee</option>
                                
                            </select>
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="log">Sign in</button><br>                       
                    </form>
                     <a href="Views/Signup.php" ><button  class="btn btn-lg btn-success btn-block"  name="register">Sign up</button></a>
                 </div>
             </div>        
        </div>
       <div class="col-sm-4">
       </div>
   </div>
</div>  
        <?php } ?>

<script src="js/bootstrap.min.js"></script>

</body>
</html>