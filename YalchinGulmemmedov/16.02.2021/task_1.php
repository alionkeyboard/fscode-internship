<?php

///// ILK atdiginiz array ucun calisan funksiya
$array = [
	'C:/',
	'windows',
	[
		'system',
		'system32',
	],
	'users',
	[
		'Ali',
		[
			'Documents',
			'Pictures',
		],
		'Guest',
		[
			'Document',

		]

	]
];

function printArrayTree ( $array, $level = 0 )
{

	foreach ( $array as $key => $value )
	{

		if ( is_array( $value ) )
		{
			$newLevel = $level + 1;
			printArrayTree( $value, $newLevel );
		}

		else
		{
			echo "<br>";
			for ( $i = 0; $i < $level + $level * 2; $i++ )
			{
				echo '&nbsp;';
			}
			echo $value;
		}

	}
}

printArrayTree( $array );
echo "<br>" . "<br>" . "<br>" . "<br>";

/////////////Duzelis olunan array ucun calisan funksiya

$correctArray = [
	'C:/' => [
		'windows' => [
			'system',
			'system32'
		],
		'users'   => [
			'ali'   => [
				'documents',
				'pictures'
			],
			'guest' => [
				'documents'
			]
		]
	]

];

function arrayTree ( $correctArray, $level = 0 )
{
	foreach ( $correctArray as $key => $value )
	{
		if ( is_array( $value ) )
		{
			echo "<br>";
			for ( $i = 0; $i < $level + $level; $i++ )
			{
				echo '&nbsp;';
			}
			echo $key;
			arrayTree( $value, $level + 1 );
		}
		else
		{
			echo "<br>";
			for ( $i = 0; $i < $level + $level; $i++ )
			{
				echo '&nbsp;';
			}
			echo $value;
		}
	}
}

echo arrayTree( $correctArray );

?>
 