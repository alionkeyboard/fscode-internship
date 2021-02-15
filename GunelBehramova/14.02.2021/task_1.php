<?php

$text = "Proqramlasdirma";

foreach ( count_chars( $text, 1 ) as $strr => $value )
{
	echo chr( $strr ) . "-" . $value . "<br>";
}

?>