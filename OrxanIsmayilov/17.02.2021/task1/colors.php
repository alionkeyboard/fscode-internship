<?php
session_start();
$colors=['197,177,23'=>'orange','198,123,45'=>'green','194,176,36'=>'sari','123,234,67'=>'red'];

function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $newArray[$key] = $array[$key];
    }

    $array = $newArray;

    return true;
}
shuffle_assoc($colors);

$_SESSION['color'] = array_rand($colors,1);