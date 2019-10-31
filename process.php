<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

var_dump($_POST);

$user = $_POST['user'] ?? null;
$psw = $_POST['psw'] ?? null;
$validUser = false;

if ($users[$user] === $psw) {
    $validUser = true;
    $_SESSION['user'] = $user;
    $_SESSION['validUser'] = $validUser;
    echo "Inloggad";
    header("Location: admin.php");
    exit;
}

//Redirect
header("Location: login.php");
