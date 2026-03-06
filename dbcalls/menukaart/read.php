<?php

$sql = "SELECT * FROM menukaart";

//preparestatement
$stmt = $conn->prepare($sql);

//execute on db
$stmt->execute();

//retrieve data
$result = $stmt->fetchAll();

//echo"connected";