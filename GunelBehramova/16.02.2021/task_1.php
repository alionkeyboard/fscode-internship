<?php

function ilk_herfi_boyut ( $soz )
{

	$low = strtolower( $soz );

	$result = ucfirst( $low );

	return $result;

}

echo ilk_herfi_boyut( 'birlikde Oyrenirik.' );

?>