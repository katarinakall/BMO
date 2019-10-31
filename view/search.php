<?php
$uriFile = basename($_SERVER["REQUEST_URI"]);
$db = connectToDatabase($dsn);

// Get incoming from search form
$search = isset($_GET['search']) ? $_GET['search']: null;

if (isset($_GET['search']) == true) {
    $sql = "SELECT * FROM object WHERE title LIKE ? OR category LIKE ? OR id = ? OR text LIKE ? OR owner LIKE ?";
    $stmt = $db->prepare($sql);
    $stmt -> execute([$search, $search, $search, $search, $search]);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM object WHERE id > ? and id <= ?";
    $params = [0, 30];
    $res = getResultset($sql, $db, $params);
}
?>
<main>
    <div class="wrap-main">

    <h1>Sök bland utställningsföremål</h1>
    <p class = "object-links-top">
        <a class="<?= $uriFile == "objects.php" ? "selected" : null ?>" href="objects.php">Tillbaka till objekt</a>
    </p>

<form>
    <fieldset>
        <legend>Sök</legend>
        <input type="search" name="search" placeholder="Enter a substring to search for, use % as wildcard."
        autofocus value="<?=htmlentities($search) ?>">
        <input type="submit" value="Search">
    </fieldset>
</form>

<?php foreach ($res as $object) : ?>
    <a class = "object" href="object.php?id=<?= $object['id']; ?>">
        <img src="img/250x250/<?= $object['image']; ?>" alt="<?= $object['title'] ?>">
        <h4><?= $object['title'] ?></h4>
    </a>
<?php endforeach; ?>
</div>
<p class = "object-links">
    <a class="<?= $uriFile == "objects.php" ? "selected" : null ?>" href="objects.php">Tillbaka till objekt</a>
</p>
</main>
