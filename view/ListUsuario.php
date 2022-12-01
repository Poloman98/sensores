<?php
    include 'header.php';
    include 'navbar.php';
    include 'modalCreaUsuario.php';
    include 'modalEliminaUsuario.php';
    include '../backend/c_listUsuario.php';

// <!-- usuario existe -->
       if(isset($_GET["Userexist"]) && $_GET["Userexist"] == 'true')
       {
          echo '<script type="text/javascript">alert("Alerta, El usuario ya existe");</script>';
       }

    //    <!-- Usuario existe -->
?>




<div class="row">
    <div class="col-lg-3 col-md-5">
    <a href="#myModal" class="trigger-btn" data-toggle="modal"><button class="btn-primary">Nuevo usuario</button></a>
    </div>        
</div>           
<br>             
<table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Eliminar</th>
        </tr>
        <?php
            while ($usu= mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>".$usu['USU_ID']."</td>";
                echo "<td>".$usu['USU_NOM']."</td>";
                echo "<td>".$usu['USU_APE']."</td>";
                echo "<td>".$usu['USU_EMAIL']."</td>";
                echo "<td><a href='#myModalElim' class='trigger-btn' data-toggle='modal'><button class='btn-danger'>Eliminar</button>";
                echo "</tr>";
            }
            
        ?>
    </table>
