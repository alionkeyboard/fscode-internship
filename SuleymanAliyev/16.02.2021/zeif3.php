<!DOCTYPE html>
<html>
	<head>
		<title>

		</title>
	</head>
	<body>
		<table>
			<?php
			for ( $i = 0; $i < 8; $i++ )
			{
				echo "<tr>";// for icinde for bir herf setrinden nece setr ne qeder yazdirmaq istediyimiz zaman veririk
				for ( $d = 0; $d < 8; $d++ )
				{
					echo "<td>";
					$b = $i + $d; //setr ve sutun kimi baxdigimiz ededlerin tam bolunenleri ve qalirini ayiririq bunu ayri ayrida bolub tapmaq olar
					if ( $b % 2 == 0 )
					{
						echo "<div style='background-color:#b58863;height: 60px;width: 100px;'></div>";
					}
					else
					{
						echo "<div style='background-color: #f1d9b5;height: 60px;width: 100px;'></div>";
					}
					echo "</td>";
				}
				echo "</tr>";
			}
			?>

		</table>

	</body>
</html>