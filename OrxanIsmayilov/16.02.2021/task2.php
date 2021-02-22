<?php

// 2-ci tapsiriq;
$alphabets = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h' ];
$numbers   = [ 1, 2, 3, 4, 5, 6, 7, 8 ];
echo "<table>";
for ( $i = 1; $i <= 8; $i++ )
{
	echo '<tr>';
	echo "<td>" . $numbers[ count( $numbers ) - $i ] . "</td>";
	for ( $j = 1; $j <= 8; $j++ )
	{

		if ( ( $i + $j ) % 2 == 0 )
		{
			echo "<td style='background:black; width:40px; height:40px;'></td>";
		}
		else
		{
			echo "<td style='background:white; width:40px; height:40px;'></td>";
		}
	}
	echo '</tr>';
}
echo "<td></td>";
foreach ( $alphabets as $a )
{
	echo "<td>$a</td>";
}
echo "</tr>";
echo "</table>";