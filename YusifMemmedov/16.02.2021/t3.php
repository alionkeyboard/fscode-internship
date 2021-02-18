<?php 
header('Content-Type: text/plain');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function yaz($arr, $depth=-1){
    
    $depth++;
    $str = '';
    foreach ($arr as $a){
        
        //hazirki element array olsa onun uchun yeniden edir yaz funksiyasini
        //amma yaz tezeden chagirilanda derinlik artmish olur
        if (is_array($a)){
            $str .=yaz($a, $depth);
        }
        //verilmish derinliye gore qaytarir edir elementleri
        else{
           $str .= "\n" . str_repeat("\t", $depth) . $a . "\n";
        }
        
    }
    
    return $str;
}

$array = [
    'C:/',
    [
        'Windows',
        [
            'system',
            'system32'
        ],
        'Users',
        [
            'Ali',
            [
                'Documents',
                'Pictures'
            ],
            'guest',
            [
                'Documents'
            ]
        ]
    ]
];

echo yaz($array);
?>