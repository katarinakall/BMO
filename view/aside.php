<aside class = "aside">
    <nav class = "navbar" id = "aside">
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <li><a class="<?= $_GET["page"] == "$key" ? "selected" : null ?>" href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>
