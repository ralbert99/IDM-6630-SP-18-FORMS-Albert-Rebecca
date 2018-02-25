<?php

  $host = '172.21.0.2';
  $database = 'week05';
  $user = 'idm6630';
  $pass = 'idm6630';

  try {

    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {

      echo 'Connection Failed: ' . $e->getMessage();
      exit();

  }



?>
