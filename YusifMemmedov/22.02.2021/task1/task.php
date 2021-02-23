<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function tap( $str, $pattern) {
    
    if( preg_match_all( $pattern , $str , $matches) )
    {
        $result = [
            "result" => $matches[0]
        ];
    }
    else
    {
        $result = [
            "result" => 'no matches'
        ];
    }
    
    return json_encode($result);
}

if( isset( $_REQUEST['str']) && isset( $_REQUEST['pattern'] ))
{
    echo tap( $_REQUEST['str'], $_REQUEST['pattern'] );
}

?>