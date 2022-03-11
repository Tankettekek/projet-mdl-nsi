<?php
$q = $_REQUEST["q"];
$resp="";

if ($q == "liste_jours"){
    $resp =  "<option value='12/3/2022'>12/3/2022</option>";
} elseif ($q == "liste_creneaux"){
    $resp = "<option value='12:00'>12:00</option>";
};
echo $resp
?>