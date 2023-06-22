<?php
include("../../modelo/conexion.php");

if (isset($_GET['id'])) {
    $txtid = (isset($_GET['id']) ? $_GET['id'] : "");
    $stm = $conexion->prepare("SELECT * FROM cursos WHERE idCurso=?");
    $stm->execute([$txtid]);
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $clase=$registro['clase'];
    $maestro=$registro['maestro'];

}

if ($_POST) {
    $txtid = (isset($_POST['txtid']) ? $_POST['txtid'] : "");
    $clase = (isset($_POST['clase']) ? $_POST['clase'] : "");
    $maestro = (isset($_POST['maestro']) ? $_POST['maestro'] : "");
 
  
    $stm = $conexion->prepare("UPDATE cursos SET clase=?,maestro_id=? WHERE idCurso=?");
    $resultado = $stm->execute([$clase, $maestro,$txtid]);
  
    header("location:index.php");
  }

?>

<?php include("../../template/navbar.php") ?>

<form action="" method="post">

    <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid
    ?>">

    <label for="">Clase</label>
    <input type="text" class="form-control" name="clase" value="<?php echo $clase
    ?>" placeholder="Ingresa un nombre">

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

    

    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>

</form>

<?php include("../../template/footer.php") ?>