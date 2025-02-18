<?php
print("Hello World from Azure");
$url = "https://www.ninoiptv.com";
$nino = file_get_contents($url);
print($nino);
?>
