<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php"><img src="../img/placa.png" alt="placa" width="50px" height="50px">&nbsp;&nbsp;Sensores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  
    <ul class="navbar-nav mr-auto"></ul> <!--Revisar acomodar item -->
    <ul class="navbar-nav col-md-2">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ListUsuario.php">Usuarios</a>
            <a class="dropdown-item" href="home.php">Dashboard sensores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../index.php" onclick="<?php session_destroy()?>">Cerrar sesión</a>
            </div>
        </li>
    </ul>  
  </div>
</nav>

<br>
<br>
<br>