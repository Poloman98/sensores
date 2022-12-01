<?php

include 'connect.php';
  $connect = mysqli_connect($hostname, $username, $password, $database);

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM USUARIO WHERE USU_EMAIL='".$email."'";
  $resultado = $connect->query($sql);

  if(mysqli_num_rows ( $resultado ) > 0){
    //echo '<script type="text/javascript">alert("Alerta , ese email ya se encuentra en uso");</script>';
    header("Location: ../index.php?Userexist=true");
    exit();
  }
  else{
        $sql = "INSERT INTO USUARIO VALUES (NULL,'".$nombre."','".$apellido."','".$email."','".$pass."')";
        $resultado = $connect->query($sql);

        header("Location: ../view/ListUsuario.php");
        exit();
  }


  ?>