<?php
    header('Content-type: text/plain');
    $tab = [];
    if (($fd = fopen("list.csv", "r")))
    {
        while (($data = fgetcsv($fd, 100, ";")))
            $tab[] = $data;
        fclose($fd);
    }
    if (($fd = fopen("list.csv", "w")))
    {
        array_unshift($tab, [$_GET['id'], $_GET['todo']]);
        foreach ($tab as $elem)
            fputcsv($fd, $elem, ";");
        fclose($fd);
    }
?>