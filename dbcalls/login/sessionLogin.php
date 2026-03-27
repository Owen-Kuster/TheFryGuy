<?php
session_start();

include "../conn.php";

$sql = "SELECT username, password FROM admin WHERE username = :username AND password = :password";

//preparestatement
$stmt = $conn->prepare($sql);

//kopelen van database
$stmt->bindParam(":username", $_POST["username"]);
$stmt->bindParam(":password", $_POST["password"]);

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