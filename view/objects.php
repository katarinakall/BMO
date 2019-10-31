<main class="objects">
    <div class="wrap-main">
<?php
    $uriFile = basename($_SERVER["REQUEST_URI"]);

    $db = connectToDatabase($dsn);
    $sql = "SELECT * FROM object WHERE id > ? and id <= ?";

    $sqlId = "SELECT MAX(id) as id FROM object";
    $maxId = getOne($db, $sqlId);


    $params = [0, 9];
if (isset($_GET['page'])) {
    if ($_GET['page'] == 2) {
        $params = [9, 18];
    } else if ($_GET['page'] == 3) {
        $params = [18, 27];
    } else if ($_GET['page'] == 4) {
        $params = [27, $maxId['id']];
    } else if ($_GET['page'] == 0) {
        $params = [0, $maxId['id']];
    }
}

$res = getResultset($sql, $db, $params);
?>

    <h1>Utställningsföremål</h1>
    <p class="object-intro">Här visas utställningsföremålen. Vill du veta mer om något föremål kan du
        få mer information genom att klicka på det. </p>
    <p class = "object-links-top">Sida:
        <a class="<?= $uriFile == "objects.php?page=1" ? "selected" : null ?>" href="?page=1">1</a>
        <a class="<?= $uriFile == "objects.php?page=2" ? "selected" : null ?>" href="?page=2">2</a>
        <a class="<?= $uriFile == "objects.php?page=3" ? "selected" : null ?>" href="?page=3">3</a>
        <a class="<?= $uriFile == "objects.php?page=4" ? "selected" : null ?>" href="?page=4">4</a>
        <a class="<?= $uriFile == "objects.php?page=0" ? "selected" : null ?>" href="?page=0">Visa alla</a>
        <a id="search" class="<?= $uriFile == "search.php" ? "selected" : null ?>" href="search.php">Sök bland objekt</a>
    </p>


    <?php foreach ($res as $object) : ?>
        <a class = "object" href="object.php?id=<?= $object['id']; ?>">
            <img src="img/250x250/<?= $object['image']; ?>" alt="<?= $object['title'] ?>">
            <h4><?= $object['title'] ?></h4>
        </a>
    <?php endforeach; ?>
    </div>
    <p class = "object-links">Sida:
        <a class="<?= $uriFile == "objects.php?page=1" ? "selected" : null ?>" href="?page=1">1</a>
        <a class="<?= $uriFile == "objects.php?page=2" ? "selected" : null ?>" href="?page=2">2</a>
        <a class="<?= $uriFile == "objects.php?page=3" ? "selected" : null ?>" href="?page=3">3</a>
        <a class="<?= $uriFile == "objects.php?page=4" ? "selected" : null ?>" href="?page=4">4</a>
        <a class="<?= $uriFile == "objects.php?page=0" ? "selected" : null ?>" href="?page=0">Visa alla</a>
    </p>
</main>
