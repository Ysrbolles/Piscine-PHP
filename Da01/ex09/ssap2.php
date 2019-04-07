#!/usr/bin/php
<?php
    function ft_strlen($str)
    {
        $i =0;
        while ($str[$i])
            $i++;
        return ($i);
    }
   function epur_str($string)
    {
        $str = trim($string);
        while (strstr($str, "  "))
            $str = str_replace("  ", " ", $str);
        return ($str);
    }
    function ft_sort($str1, $str2)
    {
        $str1 = strtolower($str1);
        $str2 = strtolower($str2);
        $i = 0;

        $tab = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        while (($i < ft_strlen($str1)) || ($i < ft_strlen($str2)))
        {
            $p_str1 = strpos($tab, ord($str1[$i]));
            $p_str2 = strpos($tab, ord($str2[$i]));
            if ($p_str1 < $p_str2)
                return (-1);
            else if ($p_str1 > $p_str2)
                return (1);
            else
                $i++;
        }
    }

    if ($argc > 1)
    {
        foreach ($argv as $elem)
        {
            if ($elem != $argv[0])
                $str .= " ".$elem." ";
        }
        $str = epur_str($str);
        $tab = explode(" ", $str);
        usort($tab, "ft_sort");
        foreach ($tab as $elem)
            echo $elem."\n";
    }
?>