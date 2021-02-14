<?php

/*******TASK1*******/
$metn    = "Bu cumlede tam-tamina alti soz var.";
$uzunluq = 0;
$sayan   = 0;
$i       = 0;

while ( $metn[ $uzunluq ] != "." )
{
	$uzunluq++;
}

while ( $i < $uzunluq )
{
	if ( $metn[ $i ] == " " )
	{
		$sayan++;
	}
	$i++;

	if ( $i == $uzunluq - 1 )
	{
		$sayan++;
	}

}
echo "<strong>TASK 1:</strong><br><em>Cumle:</em> " . $metn;
echo "<br><em>Soz sayisi</em>: " . $sayan . "<br><hr>";

/*******TASK2*******/
echo "<br><strong>TASK2:</strong><br>";
$metn2 = "bu birinci.     bu ikinci cumle.        bu ucuncu cumle.bu dorduncu cumle.bu besinci cumle. bu altinci cumle";
echo "<em>Evvelki hali:</em>" . $metn2 . "<br>";
$metn2  = ucfirst( $metn2 );
$length = 0;

while ( isset( $metn2[ $length ] ) )
{
	$length++;
}

for ( $a = 0; $a < $length; $a++ )
{
	if ( $metn2[ $a ] == "." )
	{
		if ( ctype_space( $metn2[ $a + 1 ] ) )
		{
			$metn2[ $a + 2 ] = strtoupper( $metn2[ $a + 2 ] );
		}
		else
		{
			$metn2[ $a + 1 ] = strtoupper( $metn2[ $a + 1 ] );
		}
	}
}

echo "<em>Indiki hali:</em>" . $metn2;

/*******TASK3*******/
echo "<hr><br><strong>TASK3:</strong><br>";
$metn3 = "Bu gunluk son tapsiriq";
echo "<em>Input:</em>" . $metn3;

$x = 4;
$y = 6;

echo "<br><em>Output:</em>";
for ( $i = 0; $i <= $y; $i++ )
{
	echo $metn3[ $x + $i - 1 ];
}

?>