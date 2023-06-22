<?php
include("../../modelo/conexion.php");

if (isset($_GET['id'])) {
    $txtid = (isset($_GET['id']) ? $_GET['id'] : "");
    $stm = $conexion->prepare("SELECT * FROM maestros WHERE id=?;");
    $stm->execute([$txtid]);
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $nombre=$registro['nombre'];
    $email=$registro['email'];
    $direccion=$registro['direccion'];

}

if ($_POST) {
    $txtid = (isset($_POST['txtid']) ? $_POST['txtid'] : "");
    $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
    $email = (isset($_POST['email']) ? $_POST['email'] : "");
    $direccion = (isset($_POST['direccion']) ? $_POST['direccion'] : "");
  
    $stm = $conexion->prepare("UPDATE maestros SET nombre=?,email=?,direccion=? WHERE id=?");
    $resultado = $stm->execute([$nombre, $email,$direccion,$txtid]);
  
    header("location:index.php");
  }

?>

<?php include("../../template/navbar.php") ?>

<form action="" method="post">

    <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid
    ?>">

    <label for="">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre
    ?>" placeholder="Ingresa un nombre">

    <label for="">Email</label>
    <input type="mail" class="form-control" name="email" value="<?php echo $email
    ?>" placeholder="Ingresa un nombre">

    <label for="">Direccion</label>
    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion
    ?>" placeholder="Ingresa un telefono">


    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>

</form>

<?php include("../../template/footer.php") ?>