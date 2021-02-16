<?php

/**
 * arrayın elementlərini tərsinə çevirib yeni array yaradan funksiya, array_* istifadə etmək olmaz.
 */

$array = [
    'cixarin',
    'keyfini',
    'gunun',
    'bu'
];

$n = 0; //count əvəzi

while (isset($array[$n])){
    $n++;
}
echo "[";

for($i=$n-1; $i>0; $i--){
    echo "<pre>   '$array[$i]',</pre>";
}
echo "<pre>   '" . $array[0] . "'</pre>";
echo "]";

 /**
  * [
  *    'bu',
  *    'gunun',
  *    'keyfini',
  *    'cixarin'
  * ]
  */

