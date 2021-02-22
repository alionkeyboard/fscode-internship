<?php

$text="Iso";

function hashText($text,$number)
{
    $newText = mb_str_split(mb_strtolower($text));
    $i = 0;
    $str="";
    $alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];
    while(isset($newText[$i]))
    {
    foreach($alphabet as $k=>$v)
    {
        if($newText[$i] == $v)
        {
            $k+=$number;

            if($k >= 32)
            {
                $k=$k-32;
            }

            $str.=$alphabet[$k];
        }
        
    }
 
    $i++;
}

    return $str;
}

if(isset($_GET['text']) && isset($_GET['number'])){
    echo hashText($_GET['text'],$_GET['number']);

}

