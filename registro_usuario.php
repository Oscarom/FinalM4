<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>
    <div class="container">

    <form action="" method="POST" class="formulario" autocomplete="off">
        <h2 class="titulo"> REGISTRAR</h2>
        <?php
        include("modelo/conexionl.php");
        include("../authetication/controlador/controlador_registrar_usuario.php")
        
        ?>

        <div class="padre">
            <div class="nombre">
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
            <div class="apellido">
                <label for="">Password</label>
                <input type="password" name="contraseña">
            </div>
            <div class="cuenta">
                <input type="submit" class="noton" value="Registrar" name="registro">
            </div>

            <h2>Already a member?</h2><a href="login.php">Login</a>
        </div>


    </form>





    </div>
    
</body>
</html>