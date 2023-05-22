<?php
include("../../db.php");
?>

<?php
require_once("../../includes/header.php");
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12 mt-5 bg-white mb-5">
            <h3 class="h3">Agregar cliente</h3>
            <form action="../../controllers/cliente/store.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control">
                <label for="apellido1">apellido 1</label>
                <input type="text" name="apellido1" class="form-control">
                <label for="apellido2">apellido 2</label>
                <input type="text" name="apellido2" class="form-control">
                <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
            </form>
        </div>
    </div>
</div>
<?php
require_once("../../includes/footer.php")?>