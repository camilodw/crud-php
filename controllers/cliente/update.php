<?php
include('../../db.php');
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];

    $query = "UPDATE cliente set nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2'
     WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'client Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: ../../views/cliente/index.php');
}
?>