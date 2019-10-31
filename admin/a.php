<?php
$db = connectToDatabase($dsn);

$sql_art = "SELECT * FROM article";
$sql_obj = "SELECT * FROM object";

?>

<form action="">
    <fieldset>
        <legend>Välj tabell i databasen</legend>
            <select name="table">
                <option value="object">Objekt</option>
                <option value="article">Article</option>
            </select>
        <button type="submit" name="action" value="choose">Välj</button>
    </fieldset>
</form>

<?php
if (isset($_GET['table'])) {
    $param = $_GET['table'];

    if ($param == 'article') {
        $res = getResultset($sql_art, $db);
        printArticlesToHTMLTable($res);
    } elseif ($param == 'object') {
        $res = getResultset($sql_obj, $db);
        printObjectsToHTMLTable($res);
    }

}

?>
