<?php

  require 'conn.php';

  try {

    $query = "UPDATE sites SET site_name=:site_name, site_url=:site_url WHERE id = " . $_REQUEST['site_id'];

    $statement = $conn->prepare($query);
    $statement->bindParam(':site_name', $_REQUEST['site_name']);
    $statement->bindParam(':site_url', $_REQUEST['site_url']);
    $statement->execute();

    header('Location: ../index.php');

  } catch (PDOException $e) {

    echo "Failed to Update: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
