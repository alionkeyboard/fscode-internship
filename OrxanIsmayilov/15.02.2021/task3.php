<?php
//Count
function countArray($array){
    $count = 0;
    foreach($array as $a){
        $count = $count + 1;
    }

    return $count;
}


function reverseArray($array){
    $count = countArray($array);
    $list = [];
    for($count-1; $count-1>=0; $count--){
        $list[] = $array[$count-1];
    }

    return $list;
}


$arr = ['cixarin','keyfini','gunun', 'bu'];

echo  "<pre>";print_r(reverseArray($arr)); echo "</pre>";