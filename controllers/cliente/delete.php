<?php

include("../../db.php");

if(isset($_GET['id'])) {
  $id       = $_GET['id'];
  $query    = "DELETE FROM cliente WHERE id = $id";
  $result   = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Client Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../../views/cliente/index.php');
}

?>