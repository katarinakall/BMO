<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Begravning",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "byra" => [
        "title" => "Begravningsbyrå",
        "file" => __DIR__ . "/$base/byra.php",
    ],
    "folje" => [
        "title" => "Begravningsfölje",
        "file" => __DIR__ . "/$base/folje.php",
    ],
    "transport" => [
        "title" => "Liktransport",
        "file" => __DIR__ . "/$base/transport.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";

// Render the page
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/navbar.php";
require __DIR__ . "/view/gallery.php";
require __DIR__ . "/view/footer.php";
