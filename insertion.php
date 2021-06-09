<?php

$servername = "localhost";
$username = "sall";
$password = "sall";
$dbname = "scolarite";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO etudiant (nom, prenom, age,date_inscription,classe)
  VALUES ('NDIAYE', 'Maguette', 19,'2015-06-07','DTS')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>