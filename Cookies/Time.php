<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sweetalert.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery-3.1.1.js"></script>
    <script>
     function Error3(){
               swal({
                    title: "you must logged again...",
                    text: "For you security this section had that to be closed!",
                    type: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes,press try again!",
                    closeOnConfirm: false
                    },
                    function(){
                    window.location.href='CerrarSesion.php';
                    });
            } 
    </script>
</head>
<body>
    <?php 
        require('Validar.php');
        
        $LastDateIntro = $_SESSION['LastSection'];
        $CurrentDate = date('Y-n-j H:i:s');
        $TimeInactivity = (strtotime($CurrentDate)-(strtotime($LastDateIntro)));
        
        

        if($TimeInactivity>=10){            
            echo "<script>Error3();</script>";
            
        }else{
            $_SESSION['LastSection']=$CurrentDate;
        }
    ?>
</body>
</html>


