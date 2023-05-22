<?php
include("../../db.php");
?>

<?php
require_once("../../includes/header.php");
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-3 mb-5">
            <a href="create.php" class="btn btn-success">Agregar cliente +</a>
        </div>
        <table class="bg-white table">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Apellido 2</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM cliente";
                $result_clients = mysqli_query($conn, $query);

                foreach ($result_clients as $clients) { ?>
                    <tr>
                        <td><?php echo $clients['nombre'];  ?></td>
                        <td><?php echo $clients['apellido1']; ?></td>
                        <td><?php echo $clients['apellido2']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $clients['id'] ?>" class="btn btn-secondary">
                                editar
                            </a>
                            <a href="../../controllers/cliente/delete.php?id=<?php echo $clients['id'] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require_once("../../includes/footer.php");
?>