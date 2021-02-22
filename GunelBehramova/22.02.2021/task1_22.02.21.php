<?php

$arr = [ 1, 2, 3, 1, 4, 3, 3, 5 ];

$result = [];
foreach ( $arr as $key => $value )
{
	if ( ! in_array( $value, $result ) )
	{
		$result[ $key ] = $value;
	}
}

print_r( $result );

?>