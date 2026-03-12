<?php

include '../conn.php';

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];

//variabel met een SQL query
$sql = "INSERT INTO `personeel`(`voornaam`, `achternaam`) VALUES (:voornaam, :achternaam)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':voornaam', $voornaam);
$stmt->bindParam(':achternaam', $achternaam);

//execute on db
$stmt->execute();