<?php
    $file = file("./server/info.csv");
    $data = [];
    foreach ($file as $line){
        $csvline = str_getcsv($line, ";");
        if (strtotime(str_replace("/", "-", $csvline[0])) > time()){
            $data[] = $csvline;
        }
    }
    $pdata = [];
    foreach ($data as $key => $arr){
        $time = strtotime(str_replace("/", "-", $arr[0]) . " " . $arr[1]);
        $slice = array_slice($arr, 2);
        array_push($pdata, [$time]);
        $pdata[$key] = array_merge($pdata[$key], $slice);
    }
    $colonnes = array_column($pdata, 0);
    array_multisort($colonnes, SORT_ASC, $pdata);
?>
