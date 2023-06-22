<?php

include("../../modelo/conexion.php");

$stm = $conexion->prepare("SELECT * FROM alumnos");
$stm->execute();
$alumnos = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexion->prepare("DELETE FROM alumnos WHERE id=?;");
    $stm->execute([$txtid]);
    header("location:index.php");

}


?>


<?php include("../../template/navbar.php"); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Crear
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno) { ?>
                <tr class="">
                    <td scope="row"><?php echo $alumno['id']; ?></td>
                    <td><?php echo $alumno['nombre']; ?></td>
                    <td><?php echo $alumno['dni']; ?></td>
                    <td><?php echo $alumno['email']; ?></td>
                    <td><?php echo $alumno['direccion']; ?></td>
                    <td>
                        <a  href="edit.php?id=<?php echo $alumno['id']; ?>" class="btn btn-success">Editar</a>
                        <a href="index.php?id=<?php echo $alumno['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("create.php"); ?>

<?php include("../../template/footer.php"); ?>