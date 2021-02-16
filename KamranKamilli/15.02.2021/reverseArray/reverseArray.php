<?php
function reverseArray($arr)
{
    $reverseArr = [];
    for($i=0; $i<count($arr); $i++)
    {
        $reverseArr[$i] = $arr[(count($arr)-1)-$i];
        echo $reverseArr[$i]."\n";
    }
}

$array = ["cixarin","keyfini","gunun","bu"];

reverseArray($array);
?>