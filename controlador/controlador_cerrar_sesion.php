<?php

//iniciamos la session, cerramos la sesion y redirigimos a login
  session_start();
  session_destroy();
  header("location: ../login.php")
?>