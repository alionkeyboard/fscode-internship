<?php

$axtar1 = 'Prague';
$axtar2 = 'Baku';

function city ( $axtar )
{

	$sheherler = [ 'Baku', 'Moscow', 'London', 'Istanbul' ];

	$count = count( $sheherler );
	$count -= 1;

	foreach ( $sheherler as $key => $sheher )
	{
		if ( $sheher == $axtar )
		{
			return $axtar . ' -> true';
			break;

		}
		else if ( $sheher != $axtar and $key == $count )
		{
			return $axtar . ' -> false';
		}

	}

}

echo city( $axtar1 );

?>

