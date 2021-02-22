<?php

/*Ədədin mənfi, müsbət və ya 0 olduğunu təyin edən funksiya. Əgər verilən dəyər ədəd deyilsə funksiya bunu bildirsin*/

$a = 0;

function teyin ( $a )
{

	if ( $a > 0 )
	{
		echo $a . " => müsbət ədəddir <br>";
	}
	else if ( $a < 0 )
	{
		echo $a . " => mənfi ədəddir <br>";
	}
	else if ( $a === 0 )
	{
		echo " Siz $a daxil etmisiz <br>";
	}
	else if ( $a = undefined )
	{
		echo " Bu dəyər deyil ";
	}
}

teyin( 5 );
teyin( -5 );
teyin( 0 );
teyin( "0" );

?>