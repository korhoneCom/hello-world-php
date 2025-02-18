<?php
$url = $_GET['url'];
$m3u = file_get_contents($url);
print($url);
print($m3u);
?>
