<?php

if ($_POST) {

  $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
  $email = (isset($_POST['email']) ? $_POST['email'] : "");
  $dni = (isset($_POST['dni']) ? $_POST['dni'] : "");
  $direccion = (isset($_POST['direccion']) ? $_POST['direccion'] : "");

  $stm = $conexion->prepare("INSERT INTO alumnos(id,nombre,email,dni,direccion) VALUES(null,?,?,?,?)");
  $resultado = $stm->execute([$nombre, $email, $dni,$direccion]);

  header("location:index.php");
}


?>



<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Alumno</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post"  class="formulario">
        <div class="modal-body">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresa un nombre">

          <label for="">DNI</label>
          <input type="text" class="form-control" name="dni" value="" placeholder="Ingresa un nombre">

          <label for="">Email</label>
          <input type="mail" class="form-control" name="email" value="" placeholder="Ingresa un nombre">

          <label for="">Direccion</label>
          <input type="mail" class="form-control" name="direccion" value="" placeholder="Ingresa un telefono">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>