#!/usr/bin/php
<?php
    while(true)
    {
        echo "Entrez un nombre :";
        $err = trim(fgets(STDIN),"\n");
        $nbr = trim($err);
        if(feof(STDIN))
            exit();
        if(!(is_numeric($nbr))){
         
            echo "'$err'";
            echo " n'est pas un chiffre\n";
            
        }
        else{
            echo "le nombre ".$nbr." est: ";
            if (($nbr % 2) == 0)
                echo "pair\n";
            else  
                echo "Impair\n";
        }
    }
?>