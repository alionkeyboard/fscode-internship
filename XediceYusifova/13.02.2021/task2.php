<?php
$x = 'suretli kod yazmaq her zaman yaxshi kod yazmaq demek deyil.seliqeye ve hellin optimalligina fikir verilmelidir.';
$n = 0; //strlen əvəzi
while (isset($x[$n])){
    $n++;
}
for($i=0; $i<$n; $i++){
    $simvol = $x[$i]=="." ? $i : "";
    echo $simvol . " ";

}
$array=explode(".",$x);
print_r($array);
for($i=0; $i<count($array); $i++){
    $array = array_map(function($x){
        return mb_strtoupper(mb_substr($x, 0, 1)).mb_strtolower(mb_substr($x, 1));
    }, $array);
}
$string = implode(".",$array);
echo $string;