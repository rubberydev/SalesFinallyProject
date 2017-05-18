<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">   
    <title>Log In</title>
     <script> 
            function Error(){
               swal({
                title: "There was an error when the system tried connect to the database!",
                text: "Try again",
                timer: 2000,
                showConfirmButton: false
                });
            } 

            function Error2(){
               swal({
                title: "Session Closed!",
                text: "Bye",
                timer: 5000,
                showConfirmButton: false
                });
            } 
             function Error3(){
               swal({
                title: "You must sign in with a valid user",
                text: "ACCESS DENIED!",
                timer: 5000,
                showConfirmButton: false
                });
            } 
           
    </script>
</head>
<body> 
<div class="container">
  <div class="row">
     <div class="col-sm-4">
     </div>
          <div class="col-sm-4">             
              <div class="panel panel-default">
                  <div class="panel-body">
                    <form class="form-signin" action="Controllers/AuthenticationController.php" method="POST">
                        <h2 class="form-signin-heading">Sport Wear Clothing <strong>!!!</strong></h2>
                        <label for="inputEmail" >User</label><br>
                        <input type="text" id="inputEmail"  name="user" class="form-control" placeholder="Username" ><br>
                        <label for="inputPassword" >Password</label><br>
                        <input type="password" id="inputPassword"  class="form-control" name="key" placeholder="Password">
                        <div class="checkbox">
                            <select class="selectpicker" name="rol">
                                <option value="Select">Select</option>
                                <option value="Customer">Customer</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Employee">Employee</option>   
                            </select>
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="log">Sign in <span class="glyphicon glyphicon-log-in"></span></button><br>                       
                    </form>
                     <a href="Views/Signup.php" ><button  class="btn btn-lg btn-success btn-block"  name="register">Sign up <span class="glyphicon glyphicon-user"></span></button></a>
                 </div>
             </div>        
        </div>
       <div class="col-sm-4">
       </div>
   </div>
</div>  
        
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<footer>Julian Herrera - Luis Alejandro Ramirez</footer>
</body>
</html>