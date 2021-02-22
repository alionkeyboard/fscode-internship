<?php

function seheri_tap ( $seher )
{

	$movcuddur = "";

	$seherler = [
		"Baku",
		"Moscow",
		"London",
		"Istanbul"
	];

	for ( $i = 0; $i < count( $seherler ); $i++ )
	{
		if ( strtolower( $seherler[ $i ] ) == strtolower( $seher ) )
		{
			$movcuddur = "Netice Tapildi";
			break;
		}
		else
		{
			$movcuddur = "Netice TAPILMADI";
		}
	}

	echo $movcuddur . "<br>";
}

seheri_tap( "bAKu" );
seheri_tap( "PraAGue" );
seheri_tap( "london" );
seheri_tap( "moSCOW" );
seheri_tap( "MOSKVA" );
?>