<?php
  session_start();
   
  include 'connect.php';
  $connect = mysqli_connect($hostname, $username, $password, $database);

  $email = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM usuario WHERE USU_EMAIL='".$email."' AND USU_PASS='".$pass."'";
  $resultado = $connect->query($sql);


   if(mysqli_num_rows ( $resultado ) > 0){
    $_SESSION['email'] = $email;
    header("Location: ../view/home.php");
    exit();
    
   }
   else{
    echo '<script type="text/javascript">alert("El email o password es incorrecto,vuelva a intenarlo");</script>';
    header("Location: ../index.php?fallo=true");
    exit();
  }
 
?>