<?php
   
  include 'connect.php';
  $connect = mysqli_connect($hostname, $username, $password, $database);

  $sql = "SELECT * FROM usuario";
  $resultado = $connect->query($sql);

  
   if(mysqli_num_rows ( $resultado ) == 0){
        echo '<script type="text/javascript">alert("Se ha encontrado un error para mostrar los datos");</script>';
    }
 
?>