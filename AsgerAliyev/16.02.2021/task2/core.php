<?php

$a     = 1;
$setir = [ '', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H' ];

for ( $i = 1; $i <= 8; $i++ )
{
	$sutun = 9 - $i;
	echo "<tr id='$i'>";
	echo "<td>$sutun</td>";

	for ( $j = $a; $j < $a + 8; $j++ )
	{
		if ( $j % 2 === 0 )
		{
			echo "<td class='black' id='$j'></td>";
		}
		else
		{
			echo "<td class='white' id='$j'></td>";
		}

	}

	echo '</tr>';

	if ( $i === 8 )
	{
		echo '<tr>';

		foreach ( $setir as $herf )
		{
			echo "<td>$herf</td>";
		}

		echo '</tr>';
	}
	$a += 9;
}