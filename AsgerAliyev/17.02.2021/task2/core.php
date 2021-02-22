<?php

if ( isset( $_POST[ 'eded' ] ) )
{
	$eded = $_POST[ 'eded' ];

	$eded_arr    = explode( '.', "$eded" );
	$kesr  = '0.' . $eded_arr[ 1 ];
	$kesr1 = 1 - $kesr;

	/* Mənfi ədədlərin kəsr hissəsi nöqtədən sonrakı hissə deyildir.
	 * Buna görə də $kesr ilə $kesr-in yerini dəyişmək lazım gələcək.
	 */

	if ( $eded < 0 )
	{
		$cavab = $kesr1 . ' ve ' . $kesr;
	}
	else
	{
		$cavab = $kesr . ' ve ' . $kesr1;
	}
}
