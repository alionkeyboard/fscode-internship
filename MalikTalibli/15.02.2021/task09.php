<?php

    $array = ['cixarin', 'keyfini','gunun','bu'];
    $array2 = ['calishaq', 'etmeye','hell','tapshiriqlarini', 'gunun', 'bu'];
    
    function ters($array){
        $count = count($array);
    
    for ($i = $count-1; $i >= 0; $i--) {
         $array1[] = $array[$i];
    }

    return print_r($array1);
    
    }
    
    ters($array);

?>