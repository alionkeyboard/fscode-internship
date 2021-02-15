<?php

/**************TASK1**********/
function herf_sayan ( $soz )
{

	$soz     = trim( strtolower( $soz ) );
	$uzunluq = $i = $k = $a = $arruzunluq = 0;
	$arrherf = [];

	while ( isset( $soz[ $uzunluq ] ) )
	{
		$uzunluq++;
	}

	if ( $uzunluq == 0 )
	{
		echo "Uzunluq 0 dir";
	}
	else
	{
		while ( $i < $uzunluq )
		{
			$arrherf[] = 1;
			$j         = $i + 1;
			while ( $j < $uzunluq )
			{
				if ( $soz[ $i ] == $soz[ $j ] )
				{
					$arrherf[ $i ] += 1;
					$soz[ $j ]     = 'x';
				}
				$j++;
			}
			$i++;
		}
	}

	while ( isset( $arrherf[ $arruzunluq ] ) )
	{
		$arruzunluq++;
	}

	while ( $a < $arruzunluq )
	{
		if ( $soz[ $a ] != 'x' )
		{
			echo $soz[ $a ];
			echo " --> ";
			echo $arrherf[ $a ];
			echo "<br>";
		}
		$a++;
	}
}

herf_sayan( "Proqramlasdirma" );
?>