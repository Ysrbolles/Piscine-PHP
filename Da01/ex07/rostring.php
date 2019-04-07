#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $tab = array_filter(explode(' ', $argv[1]));
        $size = count($tab);
        if ($size > 1)
        {
            $tab[] = $tab[0];
            $tab = array_slice($tab, 1);
        }
        $str = "";
        foreach ($tab as $elem)
        {
            $str .= $elem." ";
        }
        echo trim($str)."\n";
    }
?>