<?php

function html_table ( $shop = [] )
{

	$rows = [];
	foreach ( $shop as $row )
	{
		$cells = [];
		foreach ( $row as $cell )
		{
			$cells[] = "<td>{$cell}</td>";
		}
		$rows[] = "<tr>" . implode( '', $cells ) . "</tr>";
	}

	return "<table class='hci-table' border='1'>" . implode( '', $rows ) . "</table>";
}

$shop = [
	[ 'Ad, soyad', 'Yash', 'Cins' ],
	[ 'Nermin Eliyeva', 12, 'q' ],
	[ 'Kamil Rahimli', 13, 'k' ],
	[ 'Zaur Qurbaneliyev', 12, 'k' ],
	[ 'Melahet Isgenderli', 12, 'q' ],
	[ 'Ali Rzayev', 11, 'k' ],
	[ 'Ramin Orucov', 10, 'k' ],
	[ 'Veli Kerimli', 13, 'k' ],
	[ 'Zamiq Aliyev', 14, 'k' ],
	[ 'Esmaye Mustafayev', 12, 'q' ],
	[ 'Veli Kerimli', 15, 'k' ]
];

echo html_table( $shop );

echo "<br>";

for ( $i = 0; $i < count( $shop ); $i++ )
{
	$xyz[] = implode( ",", $shop[ $i ] );
}
$users = implode( ',', $xyz );

for ( $a = 0; $a < strlen( $users ); $a++ )
{
	if ( $users[ $a ] == "k" )
	{
	}
}

$oglan = substr_count( $users, 'k' );
$qiz   = 10 - $oglan;
$umumi = $oglan + $qiz;

function unicodeStrDigits ( $users )
{
	$arr = [];
	$sub = '';
	for ( $i = 0; $i < strlen( $users ); $i++ )
	{
		if ( is_numeric( $users[ $i ] ) )
		{
			$sub .= $users[ $i ];
			continue;
		}
		else
		{
			if ( $sub )
			{
				array_push( $arr, $sub );
				$sub = '';
			}
		}
	}

	if ( $sub )
	{
		array_push( $arr, $sub );
	}

	return $arr;
}

$numbers = unicodeStrDigits( $users );

function getMax ( $numbers )
{
	$n   = count( $numbers );
	$max = $numbers[ 0 ];
	for ( $b = 1; $b < $n; $b++ )
	{
		if ( $max < $numbers[ $b ] )
		{
			$max = $numbers[ $b ];
		}
	}

	return $max;
}

$max = getMax( $numbers );

function getMin ( $numbers )
{
	$n   = count( $numbers );
	$min = $numbers[ 0 ];
	for ( $b = 1; $b < $n; $b++ )
	{
		if ( $min > $numbers[ $b ] )
		{
			$min = $numbers[ $b ];
		}
	}

	return $min;
}

$min = getMin( $numbers );

$sum = array_sum( $numbers );

$yas_ortalama = $sum / ( count( $numbers ) );

echo "Sinifdeki oglanlarin sayi:" . $oglan . "<br>";
echo "Sinifdeki qizlarin sayi:" . $qiz . "<br>";
echo "Sinifdeki usaqlarin umumi sayi:" . $umumi . "<br>";
echo "Sinifdeki en boyuk usagin yashi:" . $max . "<br>";
echo "Sinifdeki en kicik usagin yashi:" . $min . "<br>";
echo "Sinifdeki ushaqlarin umumi yas ortalamasi:" . $yas_ortalama . "<br>";

echo "Sinifdeki en boyuk usagin adi:";
foreach ( $shop as $a )
{
	if ( $a[ 1 ] == $max )
	{
		printf( "%s<br>", $a[ 0 ] );
	}
}

echo "Sinifdeki en kicik usagin adi:";
foreach ( $shop as $a )
{
	if ( $a[ 1 ] == $min )
	{
		printf( "%s<br>", $a[ 0 ] );
	}

}

?>