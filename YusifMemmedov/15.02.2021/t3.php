<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function ters($arr = ['baki', 'tbilisi', 'moskva', 'tokyo']) {
    
    $ters_arr = [];
    
    for($i=count($arr)-1; $i>=0; $i--){
        $ters_arr[] = $arr[$i];
    }

    echo '<pre>';
    print_r($ters_arr);
    echo '</pre>';
}

ters();
?>