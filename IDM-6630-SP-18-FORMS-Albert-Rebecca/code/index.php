<?php

  $host = "150.253.89.131";
  $db = "week05";
  $un = "idm6630";
  $pw = "idm6630";

  try {

    $conn = new PDO("mysql:host=$host;dbname=$db", $un, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection!";

  } catch (PDOException $e){

    echo "Connection Failed: " . $e->getMessage();
    exit();

  }

  try {

    $query = "INSERT INTO hero (name) VALUE ('Green_Arrow')";
    $conn->exec($query);
    echo "<br> Values inserted into database.";

  } catch (PDOException $e) {
    echo "Insert Failed: " . $e->getMessage();
    exit();
  }


?>
