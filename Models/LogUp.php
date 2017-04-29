<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery-3.1.1.js"></script>
    <title>Document</title>
    <script>
       function SuccesConnection(){
             swal({
                    title: "your data has been saved successfully!!!",
                    text: "Now, you can enter at system!",
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Login.php';
                    });
            }
    
    
    </script>
</head>
<body>
    <?php
    require_once('../Connection/stringConnection.php');
     class SignUp{

        private $UserName;

        private $Password;
        
        private $con;

        public function __construct(){
            $this->con = dbConnection::connectedDB();
        }

        public function setUser($user){

            $this->UserName = $user;

        }        

        public function setPassword($pass){
            $this->Password = $pass;
        }

        public function registerUser(){
            $insertSQL = "INSERT INTO Users(nameUser, passwd) VALUES(
            '$this->UserName','$this->Password')";

            $statement = $this->con->query($insertSQL);

            if($statement){
               print "<script>SuccesConnection();</script>";
            }else{
              print "------------->ERROR<------------------";
            }
        }

     }
    ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>