<?php

$date = '01-11-1998';
$y    = explode( "-", $date );
$x    = [
	"",
	"Yanvar",
	"Fevral",
	"Mart",
	"Aprel",
	"May",
	"İyun",
	"İyul",
	"Avqust",
	"Sentyabr",
	"Oktyabr",
	"Noyabr",
	"Dekabr"
];
print_r( ( $y[ 0 ] . " " . $x[ intval( $y[ 1 ] ) ] . " ," . $y[ 2 ] ) );
   


       