<?php

/**
 * 1) Nəticə təkrəqəmli ədəd olana qədər verilmiş inputdakı ədədin rəqəmlərini cəmləyən funksiya.
 * Nümunə:
 */

$eded = 3999;
echo "$eded -> ";


$number = 3999;

function Cem($number){

    $sum = 0;
    $newsum = 0;

    do{
        $sum += $number % 10;
    }
    while ($number = $number / 10);

    return $sum;

}

$newNumber = Cem($number);  //3 + 9 + 9 + 9 = 30
echo $newNumber;

if ($newNumber / 10 > 0){

    $newNumber = Cem($newNumber);
    echo " -> $newNumber";  //30 -> 3 + 0 = 3

}

//3999 -> 30 -> 3
//3 + 9 + 9 + 9 = 30
//3 + 0 = 3