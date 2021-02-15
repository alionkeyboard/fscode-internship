<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>

		<?php
		function insertion_sort ( $arr )
		{
			//while (j > 0 && arr[j - 1] < valueToSort)
			for ( $i = 0; $i < count( $arr ); $i++ )
			{
				$j = $i;
				while ( $j > 0 && $arr[ $j - 1 ] < $arr[ $j ] )
				{
					$tmp           = $arr[ $j - 1 ];
					$arr[ $j - 1 ] = $arr[ $j ];
					$arr[ $j ]     = $tmp;
					$j--;
				}
			}

			return $arr;
		}

		$count   = 0;
		$herfler = [];
		$text    = "Proqramlasdirma";
		for ( $i = 0; isset( $text[ $i ] ); $i++ )
		{
			if ( isset( $herfler[ $text[ $i ] ] ) )
			{
				$herfler[ $text[ $i ] ]++;
			}
			else
			{
				$herfler[ $text[ $i ] ] = 1;
			}
		}

		$keys   = [];
		$values = [];

		foreach ( $herfler as $key => $value )
		{
			$keys[]   = $key;
			$values[] = $value;
		}

		$values = insertion_sort( $values );
		$result = [];

		foreach ( $values as $val )
		{

			foreach ( $herfler as $key => $val2 )
			{

				if ( $val == $herfler[ $key ] )
				{
					$result[ $key ]  = $val;
					$herfler[ $key ] = NULL;
					break;

				}
			}
		}

		foreach ( $result as $key => $value )
		{
			echo $key . " -> " . $value . "<br>";
		}

		?>

	</body>
</html>