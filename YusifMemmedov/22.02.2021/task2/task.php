<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function encode_string( $str , $deg ){
    
    $alphabet = [
        'a','b','c','ç','d','e','ə','f',
        'g','ğ','h','x','ı','i','j','k',
        'q','l','m','n','o','ö','p','r',
        's','ş','t','u','ü','v','y','z'
    ];
    
    $letter_count = count($alphabet);
    
    $encoded = '';
    $len = mb_strlen( $str );
    
    for( $i = 0; $i < $len; $i++ )
    {
        
        $c = mb_substr( $str, $i, 1 );
        
        $c_lower = mb_strtolower( $c );
        
        $c_key = array_search( $c_lower , $alphabet );
        
        if( $c_key !== false )
        {
            
            //verilen shifreleme derecesine gore goterilecek char-in indexinin teyin olunmasi
            if( $deg < 0 ) {
                $c_key = $letter_count + ( $c_key + $deg ) % $letter_count;
            }
            else {
                $c_key += $deg % $letter_count;
            }
            
            $c_key = $c_key % $letter_count;
            
            //stringimizde hazirki char ile onun kicildilmisi eynidirse
            //kicik herif, deyilse boyuk herf qaytaririq
            if( $c === $c_lower )
            {
                $encoded .= $alphabet[ $c_key ];
            }
            else
            {
                $encoded .= mb_strtoupper( $alphabet[ $c_key ] );
            }
            
        }
        else
        {
            //oldugu kimi yapishdir
            $encoded .= $c;
        }
        
    }
    
    return $encoded;

}

if(isset($_REQUEST['str']) && isset($_REQUEST['deg'])) echo '<br>' . encode_string($_REQUEST['str'] , $_REQUEST['deg']);


?>
