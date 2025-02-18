<?php
$url = $_GET['url'];
$password = $_GET['password'];
$type = $_GET['type'];
$output = $_GET['output'];
$url = $_GET['url']."&password={$password}&type={$type}&output={$output}";
$m3u = file_get_contents($url);
print($url);
print($m3u);
?>
