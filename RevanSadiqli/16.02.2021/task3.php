<?php

$path = [
	"C:/" => [
		"Windows" => [
			0 => "system",
			1 => "system32",
			2 => "systemapps"
		],
		"Users"   => [
			"Desktop" => [
				0 => "Documents",
				1 => "Pictures",
				2 => "Videos"
			],
			"guest"   => [
				0 => "Documents",
				1 => "file1",
				2 => "file2"
			]
		]
	]
];

function agaca_cevir ( $array )
{
	/*agaca_cevir is the recursive function,
	it calling itself until the base case satisfied*/
	echo "<ul style='list-style: none;'>";
	foreach ( $array as $key => $arr )
	{
		if ( is_string( $key ) )
		{
			//if the key is not string printing key
			echo $key;
		}
		echo "<li>";
		if ( is_array( $arr ) )
		{
			agaca_cevir( $arr );//recursive function
		}
		else
		{//base case
			echo $arr;
		}
		echo '</li>';
	}
	echo '</ul>';
}

agaca_cevir( $path );
?>