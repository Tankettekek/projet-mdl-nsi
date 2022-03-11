<?php
$q = $_REQUEST["q"];

if( isset($_REQUEST["d"])){
    $d = $_REQUEST["d"];
}


$resp="";

if ($q == "liste_jours"){
    $resp =  "<option value=''>Choisir une date</option>\n<option value='12/3/2022'>12/3/2022</option>\n<option value='19/3/2022'>19/3/2022</option>\n";
} elseif ($q == "liste_creneaux" and !empty($d)){
    $resp = "<option value='12:00'>12:00</option>";
};
echo $resp
?>