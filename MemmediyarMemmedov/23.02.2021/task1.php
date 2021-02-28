<?php $eded=123456;
$eded=strval($eded);
function number_sum($num){
$sum =0;
$sum1=0;
for($i=0;$i<strlen($num);$i++){
$sum+=$num[$i];
}
$sum=strval($sum);
for($i=0;$i<strlen($sum);$i++){
    $sum1+=$sum[$i];
}
return $sum1;


}
echo number_sum($eded);