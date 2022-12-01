<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<!-- Sesion invalida -->
<?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo '<script type="text/javascript">alert("El email o password es incorrecto,vuelva a intenarlo");</script>';
       }

       if(isset($_GET["logout"]) && $_GET["logout"] == 'true')
       {
          echo '<script type="text/javascript">alert("Se ha cerrado sesión");</script>';
          session_destroy();
       }
     ?>
<!-- Sesion invalida -->

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="POST" action="backend/Login.php">
            <img class="mb-4" src="img/arduino.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Sensores</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="user" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="checkbox mb-3">
                <label>
        <!-- <input type="checkbox" value="remember-me"> Recuerdame -->
      </label>
            </div>
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button> -->
            <input type="submit" name="GO" class="w-100 btn btn-lg btn-primary">
        </form>
    </main>



</body>

</html>