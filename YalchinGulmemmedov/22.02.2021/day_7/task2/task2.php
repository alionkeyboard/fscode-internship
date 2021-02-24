<?php

$text=$_GET['textarea'];
$num =$_GET['number'];

$alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];
$txt=str_split($text);

function coder($text,$num){
global $alphabet,$txt;

for($i=0;$i<count($txt);$i++){

    for($j=0;$j<32;$j++){
        
        if($txt[$i]==$alphabet[$j]){
            $txt[$i]= $alphabet[($j+$num)%32];
            $j=32;
        }

    }

}
$txt=implode($txt);
return $txt;
}



echo coder($text,$num);




?>