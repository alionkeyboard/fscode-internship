<?php
$cumle = 'Bu gunluk son tapsiriq.';
$x = 4;
$y = 6;
$soz="";
/*
    $n = 0; //strlen əvəzi
    while (isset($cumle[$n])){
        $n++;
    }
    for($i=0; $i<$n; $i++){
        echo $cumle[$i];
    }
*/
for($i=$x-1; $i<$x+$y-1; $i++){ //3dən 9a qədər
    $soz=$cumle[$i];
    echo $soz;   
}