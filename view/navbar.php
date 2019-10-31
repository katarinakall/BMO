<?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>
<div class="top">
    <nav class="navbar">
        <a id="a-home" class="<?= $uriFile == "index.php" ? "selected" : null ?>" href="index.php">&#8962; Begravningsmuseum Online</a>
        <div class="dropdown">
            <button class="dropbtn">&#8801;</button>
            <div class="dropdown-content">
                <a class="<?= $uriFile == "index.php" ? "selected" : null ?>" href="index.php">Hem</a>
                <a class="<?= $uriFile == "articles.php" ? "selected" : null ?>" href="articles.php?id=1">Artiklar</a>
                <a class="<?= $uriFile == "objects.php" ? "selected" : null ?>" href="objects.php">Objekt</a>
                <a class="<?= $uriFile == "search.php" ? "selected" : null ?>" href="search.php">Sök bland objekt</a>
                <a class="<?= strpos($uriFile, "gallery.php") !== false ? "selected" : null ?>" href="gallery.php?page=index">Galleri</a>
                <a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">Om</a>
                <a class="<?= $uriFile == "login.php" ? "selected" : null ?>" href="login.php">Logga in</a>
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<a class='{$uriFile} == 'admin.php' ? 'selected' : null ?' href='admin.php'>Admin</a>";
                }
                ?>
            </div>
        </div>
    </nav>
</div>
