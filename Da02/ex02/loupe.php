#!/usr/bin/php
<?php
if($argc < 2 || !file_exists($argv[1]))
    exit(1);
function to_upper($matches) {
    return strtoupper($matches[0]);
}
function tag($matches) {
    $matches = preg_replace_callback('/(?<=title=")(?:.|\n)*(?=")/iU', 'to_upper', $matches);
    $matches = preg_replace_callback('/(?<=>)(?!<.*>)(?:.|\n)*(?=<)/iU', 'to_upper', $matches);
    return $matches[0];
}
$current = file_get_contents($argv[1]);
$current = preg_replace_callback('/<a(?:.|\n)+<\/a>/iU', 'tag', $current);
print($current);
?>