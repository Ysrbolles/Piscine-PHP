<?php
    function ft_split($str)
    {
        $tab = array_filter(explode(" ", $str), function($val){
            return(trim($val) != "");
        });
            
        if ($str != NULL)
            sort ($tab);
        return ($tab);
    }
?>