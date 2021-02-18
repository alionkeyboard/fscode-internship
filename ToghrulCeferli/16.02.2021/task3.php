<?php
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
            'guests',
            [
                'Documents'
            ]
        ]
    ]
];
    // multidimensial arrayi tree formada cap etmek 
    // tabCount => bosluq sayini gosterir ve sifirdan basladigi ucun parametrimi default olaraq sifira beraber edirem
    function toTree($datas, $tabCount = 0){
        $tab = str_repeat("&nbsp", $tabCount);  // tabcount deyerine gore &nbsp tekrarladiram
        foreach($datas as $key => $data) {
            if(is_string($data)) {
                echo $tab.$data."<br>";
            } else if(is_array($data)) {
                $tabCount++;                    // eger yeni arraye girerse tabCount sayini bir deyer artiririq
                toTree($data,$tabCount);        // ve funksiyamizi cagirib tabcount deyerimizi de parametr olaraq gonderirik
                $tabCount--;                    // funksiyamiz basa catdiqdan sonra evvelki pilleye kecir ve tabcount-u bir deyer azaldirirq
            }
        }
    }
    toTree($array);
?>