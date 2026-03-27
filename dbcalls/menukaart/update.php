<?php

include '../conn.php';

$id = $_POST['id'];
$naam = $_POST["naam"];
$prijs = $_POST["prijs"];
$categorie = $_POST["categorie"];
$allergenen = $_POST["allergenen"];
$beschrijving = $_POST["beschrijving"];
$afbeeldingen = $_POST["afbeeldingen"];

//variabel met een SQL query
$sql = "UPDATE menukaart SET naam =:naam, prijs =:prijs, categorie =:categorie, allergenen =:allergenen, beschrijving =:beschrijving, afbeeldingen =:afbeeldingen WHERE id =:id";

//preparestatement
$stmt = $conn->prepare($sql);

//bind parameters
$stmt->bindParam(':id', $id);
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':categorie', $categorie);
$stmt->bindParam(':allergenen', $allergenen);
$stmt->bindParam(':beschrijving', $beschrijving);
$stmt->bindParam(':afbeeldingen', $afbeeldingen);

//execute on db
$result = $stmt->execute();

header("Location: ../login/admin.php");