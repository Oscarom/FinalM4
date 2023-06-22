<?php
$url_base = "http://localhost:3000/";
$url_cerrar = "http://localhost:3000/"

?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">

            <img src="/img/logoEscudo.jpg" style="width: 7%; padding-left:5px;" alt="">

            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base ?>modulos/alumnos/">Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base ?>modulos/maestros/">Maestros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base ?>modulos/cursos/">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url_base ?>controlador/controlador_cerrar_sesion.php">Cerrar</a>
            </li>



        </ul>
    </nav>

    <main class="container">

        <br><br>