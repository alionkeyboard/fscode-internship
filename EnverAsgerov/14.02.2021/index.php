<?php

$text = 'proqramlasdirma';

$textArr = str_split( $text );

$valuesNumber = array_count_values( $textArr );

arsort( $valuesNumber );

echo '$text="Proqramlasdirma";<br>';

foreach ( $valuesNumber as $key => $val )
{

	echo $key . $val . "<br>";
}

?>