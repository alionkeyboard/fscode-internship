<?php
/**
 * 2) Şahmat (və ya dama) taxtası çəkmək. Taxtanın altında və solunda hərflər, rəqəmlər də olmalıdır. Aşağıdakı nümunəyə baxa bilərsiz. For, while, foreach istifadə olunmalıdır. Css istifadə edə bilərsiniz.
 */

$letters = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h' ];

$chess = '<table cellspacing="0" style="margin: auto">';
for ( $i = 0; $i < 9; $i++ )
{
	$chess .= '<tr>';
	for ( $j = 0; $j < 9; $j++ )
	{
		if ( $i === 8 && $j !== 0 )
		{
			$chess .= '<td style="background-color: black;color: white;text-align: center;">' . $letters[ $j - 1 ];
			$chess .= '</td>';
		}
		else
		{
			if ( $i !== 8 && $j === 0 )
			{
				$chess .= '<td style="background-color: black;color: white;">' . ( 8 - $i );
				$chess .= '</td>';
			}
			else if ( $i === 8 && $j === 0 )
			{
				$chess .= '<td style="background-color: black;color: white;">';
				$chess .= '</td>';
			}
			else
			{
				if ( $i % 2 !== 0 && $j % 2 !== 0 )
				{
					$chess .= '<td style="background-color: #B58863;width: 50px;height: 50px">';
					$chess .= '</td>';
				}
				else
				{
					if ( $i % 2 === 0 && $j % 2 === 0 )
					{
						$chess .= '<td style="background-color: #B58863;width: 50px;height: 50px">';
						$chess .= '</td>';
					}
					else
					{
						$chess .= '<td style="background-color: #F1D9B5;width: 50px;height: 50px">';
						$chess .= '</td>';
					}
				}
			}
		}
	}
	$chess .= '</tr>';
}
$chess .= '</table>';

echo $chess;
