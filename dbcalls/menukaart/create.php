<?php

include '../conn.php';

$naam = $_POST["naam"];
$prijs = $_POST["prijs"];
$categorie = $_POST["categorie"];
$allergenen = $_POST["allergenen"];
$beschrijving = $_POST["beschrijving"];
$afbeeldingen = $_POST["afbeeldingen"];

//variabel met een SQL query
$sql = "INSERT INTO menukaart(naam, prijs, categorie, allergenen, beschrijving, afbeeldingen) VALUES (:naam, :prijs, :categorie, :allergenen, :beschrijving, :afbeeldingen)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':categorie', $categorie);
$stmt->bindParam(':allergenen', $allergenen);
$stmt->bindParam(':beschrijving', $beschrijving);
$stmt->bindParam(':afbeeldingen', $afbeeldingen);

//execute on db
$stmt->execute();

Header("Location: ../login/admin.php");