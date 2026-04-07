<?php
session_start();

include "../conn.php";

$sql = "SELECT user, passwd FROM inlogin WHERE user = :user AND passwd = :passwd";

//preparestatement
$stmt = $conn->prepare($sql);

//kopelen van database
$stmt->bindParam(":user", $_POST["user"]);
$stmt->bindParam(":passwd", $_POST["passwd"]);

//execute on db
$stmt->execute();

//ophalen van data
$result = $stmt->fetch();

if (!$result){
    echo "je bent niet ingelogd";
} else {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $result["username"];

    header("location: admin.php");
}