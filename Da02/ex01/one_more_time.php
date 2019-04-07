#!/usr/bin/php
<?php

if ($argc > 1) {
    $valid_day = array(
        'lundi',
         'mardi',
         'mercredi',
         'jeudi',
        'vendredi',
        'samedi',
        'dimanche',
   );
    $valid_mnth = array(
        'janvier' => '01',
        'février' => '02',
       'mars' => '03',
        'avril' => '04',
        'mai' => '05',
        'juin' => '06',
        'juillet' => '07',
        'août' => '08',
        'septembre' => '09',
        'octobre' => '10',
        'novembre' => '11',
        'décembre' => '12',
    );
    $verif = 0;
    list($day, $n_day, $mounth, $year, $tmp) = explode(' ', $argv[1]);
    list($hour, $min, $sec) = explode(':', $tmp);
    if (strlen($hour) !== 2 || strlen($min) !== 2 ||
        strlen($sec) !== 2 || strlen($year) != 4 || $min > 59 || $sec > 59 || $hour > 23) {
        echo "Wrong Format\n";
        exit();
    }
    if (preg_match('/[jJ]anvier/', $month) || preg_match('/[fF]évrier/', $month) || preg_match('/[mM]ars/', $month) || preg_match('/[aA]vril/', $month) ||
    preg_match('/[mM]ai/', $month) || preg_match('/[jJ]uin/', $month) || preg_match('/[jJ]uillet/', $month) || preg_match('/[aA]oût/', $month) ||
    preg_match('/[sS]eptembre/', $month) || preg_match('/[oO]ctobre/', $month) || preg_match('/[nN]ovembre/', $month) || preg_match('/[dD]écembre/', $month)) {
        echo "Wrong Format\n";
        exit();
    }

    $day = lcfirst($day);
    foreach ($valid_day as $elt) {
        if ($elt == $day) {
            $verif = 1;
            break;
        }
    }
    if ($verif === 0) {
        echo 'Wrong Format'."\n";
        exit();
    }
    $mounth = lcfirst($mounth);
    if (isset($valid_mnth[$mounth])) {
        $mnth = $valid_mnth[$mounth];
        date_default_timezone_set('Europe/Paris');
        $timestamp = strtotime($mnth.'/'.$n_day.'/'.$year.' '.$hour.':'.$min.':'.$sec);
        if (!$timestamp) {
            echo 'Wrong Format'."\n";
        } elseif (!checkdate($mnth, $n_day, $year)) {
            echo 'Wrong Format'."\n";
        } else if($year < "1970")
        {
            echo 'Wrong Format'."\n";
        } 
        else {
            echo $timestamp."\n";
        }
    } else {
        echo 'Wrong Format'."\n";
    }
}
?>