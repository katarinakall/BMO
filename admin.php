<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");

$pageReference = $_GET["page"] ?? "a";

$base = basename(__FILE__, ".php");


$pages = [
    "a" => [
        "title" => "Visa alla",
        "file" => __DIR__ . "/$base/a.php",
    ],
    "create" => [
        "title" => "Lägg till objekt",
        "file" => __DIR__ . "/$base/create.php",
    ],
    "update" => [
        "title" => "Uppdatera objekt",
        "file" => __DIR__ . "/$base/update.php",
    ],
    "delete" => [
        "title" => "Ta bort objekt",
        "file" => __DIR__ . "/$base/delete.php",
    ],

];

$page = $pages[$pageReference] ?? null;
$title = $page["title"] ?? "404";

include(__DIR__ . "/view/header.php");
include(__DIR__ . "/view/navbar.php");
include(__DIR__ . "/view/admin.php");
include(__DIR__ . "/view/footer.php");
