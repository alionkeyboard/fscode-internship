<?php

/**
 * 1) Verilmiş array-dəki təkrarlanan value-ləri silən funksiya.
 * Hazır funksiyalardan istifadə edə bilərsiniz.
 * */

$array = [1, 2, 3, 1, 4, 3, 3, 5];

function Unique($arr){

    $arr = array_unique($arr);  //eyni olanları silir, yeni key'lər qalan value'lara uyğun olur
    $newArr = array_values($arr);  //key ardıcıl olsun deyə valuelardan yeni massiv düzəldiril
    
    //aşağıdakılar görünüş üçündür, əvəzinə return $newArr; yazmaq da olar
    
    $cavab = "netice -> [";
    $n = count($newArr);

    for($i=0; $i<$n-1; $i++){
        $cavab .= " $newArr[$i],";
    }
    
    $cavab .=  " " . $newArr[$n-1] . " ];";
    return $cavab;
}
    
print_r(Unique($array));

/**
 * netice -> [ 1, 2, 3, 4, 5 ];
 */