<?php

$text = "Proqramlasdirma";

foreach ( count_chars( $text, 1 ) as $i => $val )
{
	echo "\"", chr( $i ), "\" &#8594 $val .\n";
}
?>

<!-- bele bir sey alindi nese edebilmedim eqer $hour > 12 onda $hour - 12  -->
<?php
$saat1 = "13:00";
$saat2 = "03:00";
$saat3 = "00:00";
list( $hour, $min ) = explode( ':', $saat3 );
list( $hour_sub ) = explode( ':', "12" );
$result = ( $hour - $hour_sub ) . ':' . ( $min );
echo $result;
?>

<?php

$tarix       = "07-04-2000";
$tarix2      = "12-05-1977";
$tarixArray  = date_parse_from_format( 'd/m/Y', $tarix );
$month       = DateTime::createFromFormat( '!m', $tarixArray[ 'month' ] )->format( 'F' );
$tarixString = $tarixArray[ 'day' ] . " " . $month . ", " . $tarixArray[ 'year' ];

echo $tarixString;
?>

