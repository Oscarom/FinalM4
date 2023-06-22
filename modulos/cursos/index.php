<?php

include("../../modelo/conexion.php");

$stm = $conexion->prepare("SELECT * FROM cursos
INNER JOIN maestros ON cursos.maestro_id = maestros.id
");
$stm->execute();
$cursos = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexion->prepare("DELETE FROM cursos WHERE idCurso=?;");
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
                <th scope="col">Clase</th>
                <th scope="col">Maestro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso) { ?>
                <tr class="">
                    <td scope="row"><?php echo $curso['idCurso']; ?></td>
                    <td><?php echo $curso['clase']; ?></td>
                    <td><?php echo $curso['nombre']; ?></td>
                    <td>
                        <a  href="edit.php?id=<?php echo $curso['idCurso']; ?>" class="btn btn-success">Editar</a>
                        <a href="index.php?id=<?php echo $curso['idCurso']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("create.php"); ?>

<?php include("../../template/footer.php"); ?>