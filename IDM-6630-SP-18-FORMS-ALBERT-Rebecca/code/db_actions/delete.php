<?php

  require 'conn.php';

  try {

    $query = "DELETE FROM sites WHERE id = " . $_REQUEST['site_id'];
    $conn->exec($query);

    header('Location: ../index.php');

  } catch (PDOException $e) {

    echo "Failed to Delete: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
