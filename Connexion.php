<?php

//connexion à la base de données
$servername = "localhost";
$username = "sall";
$password = "sall";
$bdname = "scolarite";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

} catch(PDOException $e) {
  
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;

