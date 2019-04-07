#!/usr/bin/php
<?php
if($argc == 2)
{
    $tab = trim($argv[1]);
    $tb = sscanf($tab, "%d %c %d");
    $a = $tb[0];
    $o = $tb[1];
    $b = $tb[2];
    if(!(is_numeric($a)) || !(is_numeric($b))
     || ($o != "*" && $o != "/" && $o!= "%" && $o != "+" && $o != "-"))
    echo "Syntax Error\n";
    else
    {
        switch($o)
     {
        case "+":
        echo $a + $b;
        break;
        case "-":
        echo $a - $b;
        break;
        case "*":
        echo $a * $b;
        break;
        case "/":
        echo $a / $b;
        break;
        case "%":
        echo $a % $b;
        break;
    }
    echo "\n";
}
}
else
echo "Incorrect Parameters\n";
?>