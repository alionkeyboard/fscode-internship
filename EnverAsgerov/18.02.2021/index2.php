<?php

$multidimensional_arr =
    [
    'eded',
    [
        'kitab',

        'defter'
    ],

    [
        1,

        11
    ],

    'baki'
    ];

//Verilenleri ayri-ayri array sekilinde qeyd

$array1 =
    [

    'eded',

    'baki'
    ];

$array2 =
    [

    'kitab',

    'defter'
    ];

$array3 =
    [

        1,

        11
    ];

//Daha sonra bir deyisken qeyd edirik

//Ayirdiqmiz arraylari array_merge ile birlesdirib yaratdiqmiz deyiskene beraber edirik

$multidimensional_arr1 = array_merge($array1,$array2,$array3);

print_r($multidimensional_arr1);