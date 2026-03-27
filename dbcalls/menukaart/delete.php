<?php

include '../conn.php';

$id = $_POST["id"];

//variabel met een SQL query
$sql = "DELETE FROM menukaart WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

//execute on db
$stmt->execute();

header("Location: ../login/admin.php");