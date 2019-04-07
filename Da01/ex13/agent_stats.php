#!/usr/bin/php
<?php
    if ($argc !== 2)
        exit;
    $tab = [];
    if (($handle = fopen("php://stdin", "r")) != FALSE) {
        while (($data = fgetcsv($handle, 500, ";")) !== FALSE) {
            $tab[] = $data;
        }
        sort($tab);
        fclose($handle);
        array_splice($tab,0,1);
        if ($argv[1] == "moyenne") {
            foreach($tab as $elem) {
                if ($elem[2] !== "moulinette" && $elem[1] !== "") {
                    $sum = $elem[1] + $sum;
                    $i++;
                }
            }
            echo $sum/$i . "\n";
        } 
        elseif ($argv[1] == "moyenne_user") {
            $avg = [];
            foreach ($tab as $elem) {
                $j = 0;
                $avg_u = 0;
                foreach ($tab as $elm) {
                    if ($elem[0] == $elm[0] && $elm[1] !== "" && $elm[2] !== "moulinette") {
                        $avg_u = $avg_u + $elm[1];
                        $j++;
                    }
                } 
                $avg[$elem[0]] = $avg_u/$j;
            }
            foreach($avg as $key => $elem)
                echo "$key:$elem\n";
        } 
        elseif ($argv[1] == "ecart_moulinette") {
            $avg = [];
            foreach ($tab as $elem) {
                $j = 0;
                $d = 0;
                $avg_u = 0;
                $avg_m = 0;
                foreach ($tab as $elm) {
                    if ($elem[0] == $elm[0] && $elm[1] !== "" && $elm[2] !== "moulinette") {
                        $avg_u = $avg_u + $elm[1];
                        $j++;
                    }
                    if ($elem[0] == $elm[0] && $elm[1] !== "" && $elm[2] == "moulinette") {
                        $avg_m = $avg_m + $elm[1];
                        $d++;
                    }
                } 
                $avg[$elem[0]] = (($avg_u/$j) - ($avg_m/$d));
            }
            foreach($avg as $key => $elem)
                echo "$key:$elem\n";
        }
    } 
?>