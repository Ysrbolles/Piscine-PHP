#!/usr/bin/php
<?php
    array_splice($argv,0,1);
    foreach ($argv as $elmnt) {
        echo $elmnt."\n";
    }
?>