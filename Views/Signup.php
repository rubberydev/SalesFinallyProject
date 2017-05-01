<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
   <script src="../js/jquery-3.1.1.js"></script>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-12">
     <div class="panel panel-default">
       <div class="panel-body">
        <h1>Register of users</h1>        
            <form action="../Controllers/AccountController.php" method="POST">
                <div class="form-group">
                    <label for="user">User: </label>
                    <input type="text" class="form-control" name="user" placeholder="name user" required/>
                </div>
                <div class="form-group">
                    <label for="key">Key: </label>
                    <input type="password" class="form-control" name="key" placeholder="password" required/>
                </div>
                <input type="submit" class="btn btn-success" name="Enviar" value="Send"/>  <input type="reset" class="btn btn-danger" name="Clean"/><br><hr>
                 <a href="../Login.php" value="back to login" class="btn btn-primary">Back to login <span class="glyphicon glyphicon-home"></span></a>
            </form>
        </div>
       </div>
    </div>
  </div>
</div> 
    
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
</body>
</html>




