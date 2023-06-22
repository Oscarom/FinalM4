<?php
 
 if(!empty($_POST["registro"])){
    if (empty($_POST["email"])or empty($_POST["contraseña"])) {
        echo "te falta algun campo";
    } else {
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        $sql = $conexion->query("insert into administradores(email,contraseña)values('$email','$contraseña')");
        if ($sql == 1) {
            echo "Usuario registrado con exito vaya a login para iniciar sesion";
        } else {
            echo "usuario no registrado";
        }
    }

 }


?>