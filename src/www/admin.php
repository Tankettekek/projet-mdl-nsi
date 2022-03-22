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
    $out  = "";
    $out .= "<table>";
    foreach($pdata as $key => $element){
        $out .= "<tr>";
        foreach($element as $subkey => $subelement){
            $out .= "<td>$subelement</td>";
        }
        $out .= "</tr>";
    }
    $out .= "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'administration</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <style>
        body{
            background-image: url("img/410283.jpg");
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #11191f;
            padding-left: 50px;
            padding-right: 50px;
            height: 100vh;
        }
    </style>
</head>
<body>
    <main class="container">
        <?php echo $out ?>
    </main>
</body>
</html>