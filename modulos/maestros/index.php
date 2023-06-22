<?php

include("../../modelo/conexion.php");

$stm = $conexion->prepare("SELECT * FROM maestros");
$stm->execute();
$maestros = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexion->prepare("DELETE FROM maestros WHERE id=?;");
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
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maestros as $maestro) { ?>
                <tr class="">
                    <td scope="row"><?php echo $maestro['id']; ?></td>
                    <td><?php echo $maestro['nombre']; ?></td>
                    <td><?php echo $maestro['email']; ?></td>
                    <td><?php echo $maestro['direccion']; ?></td>
                    <td>
                        <a  href="edit.php?id=<?php echo $maestro['id']; ?>" class="btn btn-success">Editar</a>
                        <a href="index.php?id=<?php echo $maestro['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("create.php"); ?>

<?php include("../../template/footer.php"); ?>