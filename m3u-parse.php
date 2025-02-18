<?php
$url = $_GET['url'];
$m3u = file_get_contents($url);
print($m3u);
?>
