#!/usr/bin/php
<?php
    array_splice($argv,0,1);    
    function ft_split($str)
    {
        $tab = explode(" ", $str);
        if ($str != NULL)
            sort ($tab, SORT_STRING);
        return ($tab);
    }
    $arry = array();
    foreach($argv as $elm)
    {
        $table = ft_split($elm);
        $arry = array_merge($arry, $table);
    }
    sort($arry, SORT_STRING);
    foreach($arry as $rs)
    {
        echo $rs."\n";
    }
?>