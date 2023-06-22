<?php

// llamo al metodo sesion para crear sesiones

session_start();


// reviso si se presiono el boton ingresar

if(!empty($_POST["btningresar"])){
    //si los inputs usuario y password tienen algo
    if (!empty($_POST["email"]) and !empty($_POST["contraseña"])) {
        //guarda esa data en las variables usuario y password
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        // y consulta en la base de datos si esos datos existen

        $sql = $conexion->query("select * from administradores where email='$email' and contraseña='$contraseña'");

        //si existen, guaradalos en la variable datos

        if ($datos=$sql->fetch_object()) {

            // de esa variable datos (objeto) traeme los valores id, email (que vienen de la bd) y guardalos en las variables
            //["id"]["email"]
            
            $_SESSION["id"]=$datos->id;
            $_SESSION["email"]=$datos->email;
            // y llevame a la pagina de inicio
            header("location: inicio2.php");
        } else {
            //sino muestra el siguiente error
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
        

        //sino manda el siguiente eror
    } else {
        echo "campos vacios";
    }
    
}


?>