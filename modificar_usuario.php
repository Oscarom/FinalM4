<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php

    if (isset($_POST["guardar"])) {
        session_start();
        $email = $_SESSION['email'];
        $nombre = $_POST["nombre"];
        $biografia = $_POST['biografia'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $inc = include("./modelo/conexion.php");
        $consulta = "UPDATE usuario SET nombre='$nombre', biografia = '$biografia', telefono = '$telefono' WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $consulta);
        include("cerrar_conexion.php");
        echo "actualizado con exito";
    }

    ?>
    <div>
        <nav class="navbar navbar-expand navbar-light bg-light d-flex navbarn">

            <div class="logo text-start pl-0">

                <img src="img/devchallenges.png">

                <div class="dtext">devchallenges</div>

            </div>


            <div class="p-2 nombrenav">

            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="navbar-nav mr-auto">
                    <div class="text-center"></div>

                    <!-- llamamos al archivo cerrar sesion en este boton -->
                    <a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_sesion.php">Salir</a>
                </div>

            </div>

        </nav>


        <div class="container">

            <div class="row change">
                <h3>Change info</h3>
                <div>Changes will be reflected to every services
</div>
            </div>

            <!-- el server[php_self] me da la funcionalidad de hacer una peticion para modificar los datos -->

            <form class="form-horizontal" method="POST" action="modificar_usuario.php" autocomplete="off">

                <div class="form-group">
                    <label for="photo" class="col-sm-2 control-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="potho" name="potho" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="">
                    </div>
                </div>

                <div class="form-group">

                    <label for="biografia" class="col-sm-2 control-label">Bio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="biografia" name="biografia" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="telefono" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telefono" name="telefono" value="">
                    </div>

                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" value="" autocomplete="off">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="inicio.php" class="btn btn-default">Regresar</a>
                        <button type="submit" class="btn btn-primary" name="guardar" value="guardar">Guardar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <?php




    ?>

    <?php



    ?>





</body>

</html>