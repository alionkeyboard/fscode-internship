<?php

/**
 * 2) Sizə verilən array-də bir torbanın içində hansı rəngdə şarlardan neçə ədəd olduğu göstərilir.
 * Funksiya bu məlumatlara əsasən hansı şarın çıxma ehtimalının nə qədər olduğunu hesablayıb, buna uyğun hər dəfə random cavab göndərməlidir.
 */

$arr = [
    'qirmizi'=> 12,
    'yashil' => 6,
    'goy' => 6
];

function randomReng($arr){
    $n = count($arr);

    //value'ların cəmini 100% ($yuzfaiz) götürsək, hansı value neçə faizdi tapa bilərik

    $yuzfaiz = 0;
    $values = array_values($arr);   //value = şar sayı

    for($i=0; $i<$n; $i++){
        $yuzfaiz += $values[$i];
    }

    //array'in key'i olduğu kimi qalsın, amma value'sunun yerinə ehtimalını yazaq

    $keys = array_keys($arr);
    $probabilitiesValue = [];

    for($i=0; $i<$n; $i++){
        $probabilitiesValue[$i] = $values[$i] * 100 / $yuzfaiz; //ehtimal
    }

    $probabilities = array_combine($keys, $probabilitiesValue);   //['qirmizi' => 50, 'yashil' => 25, 'goy' => 25]

    //key'ləri(qirmizi, yashil, goy) value-ya(ehtimala) uyğun  ekrana random çıxarmaq üçün:
    
    $random = [];

    foreach($probabilities as $key => $value) {

        for($i = 0; $i < $value; $i++) {
            $random[] = $key;   //$random massivinə key'ləri(qirmizi, yashil, goy) əlavə edirik
        }
        
    }

    shuffle($random);   //shuffle $random massivinin value'larının yerlərini random dəyişir
    return $random[0];
}

echo 'randomReng($arr) -> ' . randomReng($arr);

/**
 * randomReng($arr) -> qirmizi
 * randomReng($arr) -> goy
 * randomReng($arr) -> qirmizi
 * randomReng($arr) -> yashil
 */