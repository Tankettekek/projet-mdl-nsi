<?php
$q = $_REQUEST["q"];


function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

if( isset($_REQUEST["d"])){
    $d = $_REQUEST["d"];
    console_log($d);
    exec(sprintf("python script.py '%s' '%s'", $q, $d), $output);
} else{
    exec(sprintf("python script.py '%s'", $q), $output);
}


$resp = var_dump($output);
echo $resp
?>