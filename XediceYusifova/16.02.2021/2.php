<?php

/**
 * 2) Bildiyiniz kimi əgər arrayın keyləri varsa, o zaman onlara indeksə müraciət etmək mümkün deyil. Yəni aşağıdakı  mümkün deyil.
 * Açar sözlər:
 * - array_keys
 * - array_find
 * Siz elə bir funksiya yazmalısız ki, arrayın X indeksindəki elementi göstərsin.
 * Hazır funksiyalar istifadə edə bilərsiz.
 */

function elementi_goster ( $array, $index )
{

	if ( $index < count( $array ) && $index >= 0 )
	{
		$arrayKey = array_keys( $array );

		foreach ( $arrayKey as $key => $value )
		{

			if ( $key == $arrayKey[ $index ] )
			{
				return "[$index] => " . $array[ $arrayKey[ $index ] ];  //arrayKey[index] = key və array[key] = value
			}
		}
	}
	else
	{
		return "<script>alert('İndex >=0 və massivin uzunluğundan kiçik olmalıdır!');</script>";
	}
}

$array = [
	'key1' => 'value1',
	'key2' => 'value2',
	'key3' => 'value3',
	'key4' => 'value4'
];

echo elementi_goster( $array, 3 );

//$axtar1 -> false
//$axtar2 -> true