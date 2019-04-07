<?php
    header('Content-Type: text/json');
    $tab = [];
    if (($fd = fopen("list.csv", "r")))
    {
        while (($data = fgetcsv($fd, 100, ";")))
            $tab[] = $data;
        fclose($fd);
    }
    if (($fd = fopen("list.csv", "w")))
    {
        if (($key = array_search([$_GET['id'], $_GET['todo']], $tab)) !== FALSE)
            unset($tab[$key]);
        foreach ($tab as $elem)
            fputcsv($fd, $elem, ";");
        fclose($fd);
        echo json_encode($tab);
    }
?>