<?php

$arr = [1,2,3,1,4,3,3,5];
/*
 * Yeni bir yeni deyisen yaradiriq
 * Array_Unique ile arrayimizi yazib deyisene beraber edirik
*/
$newArr = array_unique($arr);

print_r($newArr);