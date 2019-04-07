#!/usr/bin/php 
<?php
    function epur($str)
    {
        $str = trim($str);
        while (strstr($str, '  '))
            $str = str_replace('  ', ' ', $str);
        return $str;
    }
   if($argc == 2)
        echo epur($argv[1])."\n";
?>