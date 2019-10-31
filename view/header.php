<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title . $siteTitel ?></title>
    <link rel="stylesheet" href="css/style.css"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <img src="img/maggy/likvagn_med_hast.jpg" alt=""/>
        <span class="site-title">Begravningsmuseum Online</span>
        <span class="site-slogan"></span>

        <?php if (isset($_SESSION['user'])) {
            echo "<p class='login'>Du är inloggad <a href='logout.php'>Logga ut</a><p>";
        }
        ?>

    </header>
