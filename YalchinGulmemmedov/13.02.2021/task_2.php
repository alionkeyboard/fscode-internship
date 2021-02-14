<?php

$string = "suretli kod yazmaq esas mesele deyil.seliqeli ve optimal kod yazmaq esasadir.bu task hell edildi";

$string = ucfirst( strtolower( $string ) );

$string = preg_replace_callback( '/[.!?].*?\w/', create_function( '$matches', 'return strtoupper($matches[0]);' ), $string );

echo $string;
?>