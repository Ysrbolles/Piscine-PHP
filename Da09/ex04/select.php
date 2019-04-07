<?php

header('Content-Type: text/json');

$tab = [];
if (($fd = fopen("list.csv", "r"))) {
    while (($data = fgetcsv($fd, 100, ";"))) {
        $tab[] = $data;
    }
    fclose($fd);
	echo json_encode($tab);
}

?>