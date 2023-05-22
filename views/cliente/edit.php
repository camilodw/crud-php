<?php
include("../../db.php");
$nombre     = '';
$apellido1  = '';
$apellido2  = '';

if (isset($_GET['id'])) {
    $id     = $_GET['id'];
    $query  = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row        = mysqli_fetch_array($result);
        $nombre     = $row['nombre'];
        $apellido1  = $row['apellido1'];
        $apellido2  = $row['apellido2'];
    }
}

?>
<?php include('../../includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="../../controllers/cliente/update.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Update name">
                    </div>
                    <div class="form-group">
                        <input name="apellido1" type="text" class="form-control" value="<?php echo $apellido1; ?>" placeholder="Update lastname">
                    </div>
                    <div class="form-group">
                        <input name="apellido2" type="text" class="form-control" value="<?php echo $apellido2; ?>" placeholder="Update lastname">
                    </div>
                    <button class="btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('../../includes/footer.php'); ?>