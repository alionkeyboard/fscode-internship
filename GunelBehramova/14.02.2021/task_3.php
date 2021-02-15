<?php

$tarix1 = '07-04-2000';
$tarix2 = '12-05-1977';

$date1 = new DateTime( $tarix1 );
$date2 = new DateTime( $tarix2 );

echo $date1->format( 'j, F Y' ) . '<br>';
echo $date2->format( 'j, F Y' );

?>