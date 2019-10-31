<?php $db = connectToDatabase($dsn);
    $sql = "SELECT * FROM article WHERE id = 4";
    $res = getOne($db, $sql);

echo <<< EOD
<main>
    <article>
        <header>
            <h1>{$res['title']}</h1>
            <p class="author">Uppdaterad <time>{$res['pubdate']}</time></p>
        </header>
            {$res['content']}
        <footer>
        </footer>
    </article>
    <a class = "doc" href="documentation.php">Kodstruktur och dokumentation</a>
</main>
EOD;
