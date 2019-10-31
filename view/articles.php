<div class="wrap-main">

<?php require __DIR__ . "/article-aside.php";
    $db = connectToDatabase($dsn);
    $sql = "SELECT * FROM article WHERE id = ?";
if (isset($_GET['id'])) {
    $params = $_GET['id'];
} else {
    $params = 1;
}
    $res = getOne($db, $sql, [$params]);
    echo <<< EOD
    <main class="articles">
        <article>
            <header>
                <h1>{$res['title']}</h1>
                <p class="author">Uppdaterad <time>{$res['pubdate']}</time> av {$res['author']}</p>
            </header>
                {$res['content']}
            <footer>
            </footer>
        </article>
    </main>
EOD;
?>
</div>
