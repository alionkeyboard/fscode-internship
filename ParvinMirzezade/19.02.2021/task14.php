<?php

$ededler     = [ 2, 5, 6, 11, 1, 3 ];
$enboyukeded = 0;

// ilk öncə $ededler arrayindeki deyerləri tapaq və bu dəyərləri ən böyük ədədlə müqayisə edək.
foreach ( $ededler as $eded )

{
	if ( $enboyukeded < $eded )

	{
		$enboyukeded = $eded;
	}
}

echo $enboyukeded;

?>