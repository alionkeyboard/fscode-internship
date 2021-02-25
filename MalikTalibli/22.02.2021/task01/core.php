<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST)) {
    
    $n = $_POST['sifre'];
    $text = $_POST['metn'];
}

$input = mb_strtolower($text, 'UTF-8');

$input = mb_str_split($input);
$h = '';

$alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];

    for ($i = 0; $i < count($input); $i++) {
        
         $k = array_search($input[$i], $alphabet);
         
        if((31-$k) < $n)
            {
    
                 $k = $k - 31 + ($n - 1);

                 $h .= $alphabet[$k];

                  //echo 31 - $k + 7;
            }else{
    
                $k+=$n;
                $h .= $alphabet[$k];
    
            }
    }
    
    echo mb_strtoupper($h);



?>
