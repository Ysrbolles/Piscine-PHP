#!/usr/bin/php
<?php
$r = null;
foreach ($argv as $elem) 
{
    if($argv[1] == $elem)
        $cle = $argv[1];
    if ($elem != $argv[1])
    {
        $tb = explode(':', $elem);
        if ($tb[0] == $cle)
            $r = $tb[1];
    }
}
echo $r;
if($r != null)
echo "\n";
?>
