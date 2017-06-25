<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sweetalert.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery-3.1.1.js"></script>
    <title>Log Up</title>
    <script>
       function SuccesConnection(){
             swal({
                    title: "Your data has been saved successfully!!!",
                    text: "Now, you can enter the system!",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='../Login.php';
                    });
            }

        function BadRequest(){
             swal({
                    title: "You couldn't register this user!!!",
                    text: "If you have any question, contact the system administrator!",
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

     function WrongUser(){
             swal({
                    title: "Incorrect data...you don't have a valid username or password.",
                    text: "You should check your information, or sign up, and try again!",
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

        private $TypeUser;
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

        public function setRol($role){
            $this->TypeUser = $role;
        }

        public function registerUser(){
            $insertSQL = "INSERT INTO Users(NameUser, passwd, Role) VALUES(
            '$this->UserName','$this->Password','$this->TypeUser')";

            $statement = $this->con->query($insertSQL);

            if($statement){
               print "<script>SuccesConnection();</script>";
            }else{
              print "<script>BadRequest();</script>";
            }
        }

        public function ValidateUser(){
            $SQLquery = "SELECT * FROM Users WHERE NameUser = '$this->UserName' AND passwd = '$this->Password' AND Role = '$this->TypeUser'";
            $statement = $this->con->query($SQLquery);

            if($statement->num_rows > 0){
                while($rows = $statement->fetch_assoc()){
                    //echo "user".$rows['nameUser']. "<br>key".$rows['passwd'];
                     if($rows['NameUser'] == $this->UserName && $rows['passwd'] == $this->Password && $rows['Role']==$this->TypeUser){                                                 
                         $_SESSION['userID'] = $rows['CustomerID'];
                         $this->con->close();
                         header("location:../Views/SectionMain.php");
                     }
                }               
            
            $this->con->close();
            }else{
            print "<script>WrongUser();</script>";
            }
      }
     }


    ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>