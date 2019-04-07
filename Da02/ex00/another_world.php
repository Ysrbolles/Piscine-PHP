#!/usr/bin/php
<?php
    if($argc > 1)
    {
        $str = trim(preg_replace("/[\n\t\s]+/", " ", $argv[1]));
        echo $str."\n";
    }
?>