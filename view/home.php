<?php
$db = connectToDatabase($dsn);
$sql = "SELECT * FROM object WHERE id = 12 OR id = 1";

$res = getResultset($sql, $db);

echo <<< EOD
<main>
    <article>
        <header>
            <h1>Välkommen till Begravningsmuseum Online</h1>
        </header>

            <p class="intro">BMO, Begravningsmuseum Online finns för att vårda ett
            kulturarv av seder och bruk kring begravningar. Här kan du läsa om vilka
            seder och bruk som har använts vid begravningar under de senaste århundradena.
            Kom in och lär dig om hela förloppet vid ett dödsfall, från tillkännagivandet
            via klockringning till gravsättningen och gravölet.
            </p>
EOD;
?>
<div class="home-obj">

<?php foreach ($res as $object) : ?>
    <a class = "object" href="object.php?id=<?= $object['id']; ?>">
        <img src="img/250x250/<?= $object['image']; ?>" alt="<?= $object['title'] ?>">
        <h4><?= $object['title'] ?></h4>
    </a>
<?php endforeach; ?>
    </div>
    </article>
</main>
