<?php
    function ft_is_sort($str)
    {
        $tab = $str;
        sort($str);
        if ($tab != $str)
            return false;
        else 
            return true;
    }
?>