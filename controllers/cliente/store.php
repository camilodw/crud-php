<?php

include("../../db.php");

if (isset($_POST['save'])) {
  $nombre       = $_POST['nombre'];
  $apellido1    = $_POST['apellido1'];
  $apellido2    = $_POST['apellido2'];
  $query = "INSERT INTO cliente(nombre, apellido1, apellido2) 
            VALUES ('$nombre', '$apellido1', '$apellido2')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Cliente Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../../views/cliente/index.php');

}

?>