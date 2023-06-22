<?php

if ($_POST) {

  $curso = (isset($_POST['curso']) ? $_POST['curso'] : "");
  $maestro = (isset($_POST['maestro']) ? $_POST['maestro'] : "");

  $stm = $conexion->prepare("INSERT INTO cursos(idCurso,clase,maestro_id) VALUES(null,?,?)");
  $resultado = $stm->execute([$curso, $maestro]);

  header("location:index.php");

  
}

?>


<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post"  class="formulario">
        <div class="modal-body">
          <label for="">Curso</label>
          <input type="text" class="form-control" name="curso" value="" placeholder="Ingresa un nombre">


          <select class="form-select mb-3" name="maestro">
            <option selected disabled>--Asignar Maestro--</option>
            <?php
                include ("../../modelo/conexionl.php");

                $sql = $conexion->query("SELECT * FROM maestros");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['id']."'>".$resultado['nombre']."</option>";
                }
            ?>
        </select>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Save changes</button>
        </div>

      </form>
    </div>
  </div>
</div>