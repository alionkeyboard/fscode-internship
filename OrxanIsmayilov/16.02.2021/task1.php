<?php
// 1-ci tapsiriq
$array = [
    ['Nermin ELiyeva', 12, 'q'],
    ['Kamil Rehimli', 13, 'k'],
    ['Zaur Qurbaneliyev', 12, 'k'],
    ['Melahet Isgenderli', 12, 'q'],
    ['Ali Rzayev', 11, 'k'],
    ['Ramin Orucov', 10, 'k'],
    ['Veli Kerimli', 13, 'k'],
    ['Zamiq Aliyev', 14, 'k'],
    ['Esmayeva Mustafayeva', 12, 'q'],
    ['Veli Kerimli', 15, 'k'],
];
function countGender($array) {
    $girls = 0;
    $boys = 0;
    foreach ($array as $a) {
        if ($a[2] == 'k')
            $boys++;
        else
            $girls++;
    }
    return ['boys'=>$boys, 'girls'=>$girls];
}
print_r(countGender($array));
echo "<br>";

function average($array) {
    $sum = 0;
    $count = 0;
    foreach ($array as $a) {
        $count++;
        $sum = $sum + $a[1];
    }
    $avg = $sum / $count;
    return $avg;
}

print('yas ortalamasi: '.average($array));
echo "<br>";

function age($array) {
    $max = $array[0][1];
    $min = $array[0][1];
    $max_name = $array[0][0];
    $min_name = $array[0][0];
    foreach($array as $a) {
        if($max <= $a[1]) {
            $max = $a[1];
            $max_name = $a[0];
        }

        if($min >= $a[1]){
            $min = $a[1];
            $min_name = $a[0];
        }
    }
    return [
        'max' => $max_name,
        'min'=> $min_name
    ];
}
echo print_r(age($array));
echo "<br>";


function countArray($array) {
    $count = 0;
    foreach($array as $a) {
        $count++;
    }
    return $count;
}

echo 'Usaqlarin umumi sayi: '.countArray($array);
echo "<br>";
