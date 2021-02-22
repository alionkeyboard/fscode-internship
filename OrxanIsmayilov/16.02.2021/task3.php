<?php

$array = [
	'C:/' => [
		'Windows' => [ 'system', 'system32' ],
		'Users'   => [
			'Ali'   => [
				'Documents',
				'Pictures'
			],
			'Guest' => [ 'Documents' ]
		],
	],
];

function recursive ( $array, $content = '' )
{
	foreach ( $array as $k => $v )
	{
		if ( is_array( $v ) )
		{
			if ( $content == "" )
			{
				$content .= $k;
			}
			else
			{
				$content = "$content<br>&nbsp;&nbsp;$k";
			}
			$content = recursive( $v, $content );
		}
		else
		{
			$content = "$content<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$v";
		}
	}

	return $content;
}

echo recursive( $array );
