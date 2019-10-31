<?php
/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

$siteTitel = " | BMO";

$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

$fileName = __DIR__ . "/db/bmo2.sqlite";
$dsn = "sqlite:$fileName";

$users = [
    "doe" => "doe",
    "admin" => "admin"
];
