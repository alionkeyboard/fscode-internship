<?php

$text = 'Bu cumlede tam-tamina alti soz var.';
$soz  = str_word_count( $text );
echo $soz;
?>

<?php
$text = 'suretli kod yazmaqa her zaman daha yanshi kod yazmaq demek deyil. seliqeye ve hellin optimalligina daha fikir vermelidir';
$text = ucfirst( strtolower( $text ) );
$text = preg_replace_callback( '/[.!?] .*?\w/', create_function( '$matches', 'return strtoupper($matches[0]);' ), $text );
echo $text;
?>  
