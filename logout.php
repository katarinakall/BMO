<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

sessionDestroy();

header("Location: index.php");
