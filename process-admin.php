<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$db = connectToDatabase($dsn);

$id = $_POST["id"] ?? null;
$title = $_POST["title"] ?? "";
$category = $_POST["category"] ?? "";
$text = $_POST["text"] ?? 0;
$image = $_POST["image"] ?? 0;
$owner = $_POST["owner"] ?? "";
$action = $_POST["action"] ?? "";


print_r($_POST);
if (isset($_SESSION['validUser']) && $_SESSION['validUser'] == true) {
    if ($action === "create") {
        $stmt = $db->prepare("INSERT INTO object (id, title, category, text, image, owner) VALUES(?, ?, ?, ?, ?, ?)");
        $params = [$id, $title, $category, $text, $image, $owner];
        $stmt->execute($params);
    } else if ($action === "update") {
        $stmt = $db->prepare("UPDATE object SET title = ?, category = ?, text = ?, image = ?, owner = ? WHERE id = ?");
        $params = [$title, $category, $text, $image, $owner, $id];
        $stmt->execute($params);
    } else if ($action === "delete") {
        $stmt = $db->prepare("DELETE FROM object WHERE id = ?");
        $params = [$id];
        $stmt->execute($params);
    }
}

//Redirect
header("Location: admin.php");
