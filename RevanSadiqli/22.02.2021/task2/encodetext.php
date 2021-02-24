<?php

    function encode($number,$text){
        $alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ',
            'h','x','ı','i','j','k','q','l','m','n','o','ö','p',
            'r','s','ş','t','u','ü','v','y','z'];
        $encodedtext = mb_str_split($text);//metini arraye atiriq
        for($i = 0; $i < count($encodedtext); $i++){
          for ($j = 0; $j < count($alphabet); $j++) {
            if(mb_strtolower($encodedtext[$i]) === $encodedtext[$i]){
           //eger verilen herf kicik herfdise olduqu kimi qalir
              if($encodedtext[$i] === $alphabet[$j]){
           //eger verilen herf alphabetdeki herfle uygunlassa number qeder artirib mod 32 ni tapiriq
                $encodedtext[$i] = $alphabet[($j + $number) % count($alphabet)]; 
                break;
               }
             } elseif($encodedtext[$i] === mb_strtoupper($encodedtext[$i])) {
                if(mb_strtolower($encodedtext[$i]) === $alphabet[$j]){
             //eger verilen herf boyuk herfdise herfi kicildirik
                 $encodedtext[$i] = mb_strtolower($encodedtext[$i]);
                 $encodedtext[$i] =$alphabet[($j + $number) % count($alphabet)];
                 $encodedtext[$i] = mb_strtoupper($encodedtext[$i]);//sonra herfi burda boyuduruk
                 break;
                }
              }
           }
        }
        $encodedtext = implode($encodedtext);
        return $encodedtext;
    }


    function callSubmit(){
       if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
         if ( isset( $_POST["encode"] ) ) {
           $number = $_POST["number"];
           $text = $_POST["text"];
           echo "<div class='style2'>" ;
             echo encode($number,$text);
           echo "</div>";
         }
       }
    }
?>
