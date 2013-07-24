<?php
// File Name: proxy.php
if (!isset($_GET['url'])) die();
$url = urldecode($_GET['url']);
$protocol = parse_url($url);
$url = $protocol['scheme'] . '://' . str_replace($protocol['scheme'] . '://', '', $url); // Avoid accessing the file system
echo file_get_contents($url);
?>
