<?php

/**
 * 2) Multidimensional array-i sadə array-ə çevirən funksiya.
 */

$multidimensional_arr = [
    'eded',
    [
        'kitab',
        'defter'
    ],
    [
        1,
        11
    ],
    'Baki'
];

function makeSingleArr($array){
    if (!is_array($array)){
        return false;
    }
    $result = [];
    foreach ($array as $key => $value){
        if (is_array($value)){  //arrayin value-su arraydirsə
            $result = array_merge($result, makeSingleArr($value));  //array_merge array-ə value əlavə etmək üçün
        }
        else{
            $result = array_merge($result, array($key => $value));
        }
    }
    return $result;
}

function print_Arr($arr){   //Görünüş üçün yazılıb

    $result_arr = makeSingleArr($arr);
    $n = count($result_arr);
    $netice = "\$arr = <br /> [";

    for($i=0; $i<$n-1; $i++){
        $netice .= "<pre>     '$result_arr[$i]',</pre>";
    }

    $netice .= "<pre>     '$result_arr[$i]'</pre>";
    $netice .= "];";
    
    return $netice;
}

/*
    print_Arr funksiyanın əvəzinə
        print_r(makeSingleArr($multidimensional_arr));
    yazmaq da olar
*/

echo print_Arr($multidimensional_arr);

/**
 * $arr =
 * [
 *      'eded',
 *      'kitab',
 *      'defter',
 *      1,
 *      11,
 *      'Baki   
 * ];
 */