<?php

$ededler = [ 2, 5, 6, 1, 11, 3 ];

//Bir deyisen teyin edib ve arrayin 0-ci elemetine beraber edirik

$a = $ededler[ 0 ];

//Foreach dovrunu yaradiriq

foreach ( $ededler as $key => $value )
{

	//Sertimizi yaziriq.Eger yaratdigimiz deyisen

	if ( $a < $value )
	{

		$a = $value;

	}

}

print_r( $a );

?>
