<?php

  require 'conn.php';

  try {

    $query = "INSERT INTO sites (site_name, site_url) VALUES (:site_name, :site_url)";

    $statement = $conn->prepare($query);
    $statement->bindParam(':site_name', $_REQUEST['site_name']);
    $statement->bindParam(':site_url', $_REQUEST['site_url']);
    $statement->execute();

    header('Location: ../index.php');

  } catch (PDOException $e) {

    echo "Failed to Insert: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
