<?php
/**
 * Definitions of commonly used functions.
 */
function sessionDestroy()
{
    // Unset all of the session variables.
    $_SESSION = [];

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function getResultset($sql, $db, $params = [])
{
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

function getOne($db, $sql, $params = [])
{
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    return $res;
}

function printObjectsToHTMLTable($res)
{
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['id']}</td>";
        $rows .= "<td>{$row['title']}</td>";
        $rows .= "<td>{$row['category']}</td>";
        $rows .= "<td>{$row['owner']}</td>";
        $rows .= "<td><a href='admin.php?page=update&object={$row['id']}'>&#x1F58A</a></td>";
        $rows .= "<td><a href='admin.php?page=delete&object={$row['id']}'>&#x1F5D1</a></td>";
        $rows .= "</tr>\n";
    }

    // Print out the result as a HTML table using PHP heredoc
    echo <<<EOD
    <table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>Owner</th>
    </tr>
    $rows
    </table>
EOD;
}

function printArticlesToHTMLTable($res)
{
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['id']}</td>";
        $rows .= "<td>{$row['category']}</td>";
        $rows .= "<td>{$row['title']}</td>";
        $rows .= "<td>{$row['author']}</td>";
        $rows .= "<td>{$row['pubdate']}</td>";
        $rows .= "</tr>\n";
    }

    // Print out the result as a HTML table using PHP heredoc
    echo <<<EOD
    <table>
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Title</th>
        <th>Author</th>
        <th>Updated</th>
    </tr>
    $rows
    </table>
EOD;
}
