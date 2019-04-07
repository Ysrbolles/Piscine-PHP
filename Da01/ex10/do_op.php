#!/usr/bin/php
<?php
    if($argc == 4)
    {
        $nb1 = trim($argv[1]);
        $nb2= trim($argv[3]);
        $op = trim($argv[2]);
        if(ctype_digit($nb1) && ctype_digit($nb2))
        {   
            switch ($op)
            {
                case "*":
                    echo $nb1 * $nb2;
                    break;
                case "+":
                    echo $nb1 + $nb2;
                    break;
                case "-":
                    echo $nb1 - $nb2;
                    break;
                case "/":
                    echo $nb1 / $nb2;
                    break;
                case "%":
                    echo $nb1 % $nb2;
                    break;
            }
            echo "\n";          
        }
    }
    else
        echo "Incorrect Parameters\n";
    
?>