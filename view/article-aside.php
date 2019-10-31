<?php
    $db = connectToDatabase($dsn);
    $sql = "SELECT title, image FROM object WHERE id = ?";

    $params = 4;
if (isset($_GET['id'])) {
    if ($_GET['id'] == 1) {
        $params = 4;
    } else if ($_GET['id'] == 2) {
        $params = 16;
    } else if ($_GET['id'] == 3) {
        $params = 24;
    } else if ($_GET['id'] == 5) {
        $params = 12;
    } else if ($_GET['id'] == 6) {
        $params = 11;
    }
}

    $resPic = getOne($db, $sql, [$params]);

    $sql = "SELECT id, title FROM article WHERE category = 'article' OR category = 'maggy'";
    $resTitles = getResultset($sql, $db);
?>

<aside class = "aside">
    <nav class = "navbar" id = "aside">
        <ul>
        <?php foreach ($resTitles as $article) :?>
            <li><a class="<?= $_GET["id"] == $article['id'] ? "selected" : null ?>" href="?id=<?= $article['id'] ?>"><?= $article["title"] ?></a></li>
        <?php endforeach; ?>
        </ul>

<?php
if ($params != 11) {
    echo <<<EOD
    <figure class = "side-img">
        <img src="img/250/{$resPic['image']}" alt="">
        <figcaption>{$resPic['title']}</figcaption>
    </figure>
EOD;
}?>
    </nav>
</aside>
