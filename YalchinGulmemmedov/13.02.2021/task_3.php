<?php

function SentenceBetweenText($from,$range,$text)
{  
    $i = 0;
    $textArray = [];
    while (@$text[$i] != null) {
        if($i >= $from -1 && count($textArray) < $range){
            $textArray[] = $text[$i];
        }
        
        $i++;
    }

    $response = '';
    foreach($textArray as $char){
        $response .= $char;
    }

    return $response;
}
 echo SentenceBetweenText( 4,6,"Bu gunluk son tapsiriq.")
?>