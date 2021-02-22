<?php

$eded1 = 15;
$eded2 = -8;
$eded3 = 0;
$eded4 = 'A4';

/*
 * Sertlerimizi yaziriq
 *Deyerin var olub olmadigini yoxlayiriq
 */
if ( isset( $eded1 ) && $eded1 > 0 )
{
	//Eger eded 0-dan boyukdurse musbetdir
	echo '15 musbet ededdir<br>';

}

if ( isset( $eded2 ) && $eded2 < 0 )
{
	//Eger eded 0-dan kicikdirse menfidir

	echo '-8 menfi ededdir<br>';
}

if ( isset( $eded3 ) && $eded3 == 0 )
{
	//Eger eded 0-a beraberdise deyer 0-dir

	echo '0 daxil etmisiniz<br>';
}

if ( isset( $eded4 ) && $eded4 == 'A' )
{
	//Eger hecbiri deyilse demeli eded deyil

	echo 'daxil etdiyiniz deyer eded deyil';
}











