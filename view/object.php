<main class="objects">
    <div class="wrap-main">
<?php
    $db = connectToDatabase($dsn);
    $sql = "SELECT * FROM object WHERE id = ?";
    $param = $_GET['id'];
    $res = getOne($db, $sql, [$param]);
?>


    <div class="object-details">
        <h2><?= $res['title'] ?></h2>
        <p>Kategori: <?= $res['category'] ?></p>
        <p>Ägare: <?= $res['owner'] ?></p>
        <p><?=$res['text'] ?></p>
        <img src="img/550/<?= $res['image']; ?>" alt="<?= $res['title'] ?>">
    </div>
    <?php

    if ($param == 1) {
        $previous = $param ;
        $next = $param  + 1;
    } else if ($param == 30) {
        $previous = $param  - 1;
        $next = $param ;
    } else {
        $previous = $param  - 1;
        $next = $param  + 1;
    }
    ?>

    <p class="next">
        <a href="?id=<?= $previous ?>">Föregående objekt <</a>
        <a href="?id=<?= $next ?>">> Nästa objekt</a>
    </p>
    <a class="obj" href="objects.php">Gå tillbaka till alla objekt</a>
