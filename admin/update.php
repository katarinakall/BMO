<?php
$db = connectToDatabase($dsn);

    $id = $_GET["object"] ?? null;

    $sql = "SELECT * FROM object WHERE id = ?";
    $params = [$id];
    $res = getOne($db, $sql, $params);

?>
<form action="process-admin.php" method="post" class="crud">
    <fieldset>
        <legend>Uppdatera objekts information</legend>
        <label for="id">Id</label>
        <input type="number" name="id" id="id" min=1 value="<?= $res['id'] ?>">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $res['title'] ?>">
        <label for="category">Category</label>
        <input type="text" name="category" id="category" value="<?= $res['category'] ?>">
        <label for="text">Text</label>
        <input type="text" name="text" id="text" value="<?= $res['text'] ?>">
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="<?= $res['image'] ?>">
        <label for="owner">Owner</label>
        <input type="text" name="owner" id="owner" value="<?= $res['owner'] ?>">
        <button type="submit" name="action" value="update">Uppdatera</button>
    </fieldset>
</form>
