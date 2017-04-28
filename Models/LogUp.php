<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
               print "your data has been saved successful!!";
            }else{
              print "------------->ERROR<------------------";
            }
        }

     }
    ?>
</body>
</html>