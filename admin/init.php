<?php
// Prepare the SQL statement to drop the table
$sql = "DROP TABLE IF EXISTS 'pokemon'";

$db = connectToDatabase($dsnPokemon);

$stmt = $db->prepare($sql);
$stmt->execute();

// Prepare the SQL statement to create the table
$sql = <<<EOD

CREATE TABLE "pokemon" (
	"nr"	INTEGER,
	"name"	TEXT,
	"type"	TEXT,
	"weight"	REAL,
	"height"	REAL,
	PRIMARY KEY("nr")
)

EOD;

$stmt = $db->prepare($sql);
$stmt->execute();

// Prepare SQL statement to INSERT new rows into table
$sql = "INSERT INTO 'pokemon' VALUES(?, ?, ?, ?, ?)";
$stmt = $db->prepare($sql);

// Insert each row
$params = [1, 'Bulbasaur', 'Grass/Poison', 6.9, 0.7];
$stmt->execute($params);

$params = [2, 'Ivysaur', 'Grass/Poison', 13.0, 1.0];
$stmt->execute($params);

$params = [3, 'Venusaur', 'Grass/Poison', 100.0, 2.0];
$stmt->execute($params);

$params = [4, 'Charmander', 'Fire', 8.5, 0.6];
$stmt->execute($params);

$params = [5, 'Charmeleon', 'Fire', 19.0, 1.1];
$stmt->execute($params);

$params = [6, 'Charizard', 'Fire/Flying', 90.5, 1.7];
$stmt->execute($params);

$params = [7, 'Squirtle', 'Water', 9.0, 0.5];
$stmt->execute($params);

$params = [8, 'Wartorle', 'Water', 22.5, 1.0];
$stmt->execute($params);

$params = [9, 'Blastoise', 'Water', 85.5, 1.6];
$stmt->execute($params);

$params = [10, 'Caterpie', 'Bug', 2.9, 0.3];
$stmt->execute($params);

header("Location: admin.php");
