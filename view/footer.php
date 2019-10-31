<?php
$numFiles   = count(get_included_files());
$memoryUsed = round(memory_get_peak_usage(true) / (1024*20124), 2);
$loadTime   = round((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000, 3);
?>

<footer id="site-footer">
    <hr>
    <p>Validatorer: <a href="http://validator.w3.org/check/referer">HTML5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a></p>
    <p>Specifikationer: <a href="https://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
    <a href="https://www.w3.org/html/">HTML</a>
    <a href="https://www.w3.org/Style/CSS/">CSS</a></p>
    <p>Time to load page: <?= $loadTime ?> ms. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?> MB.</p>
    <p>Coyright © 2019 Katarina Käll, katarina.kall@outlook.com</p>
</footer>
</body>
</html>
