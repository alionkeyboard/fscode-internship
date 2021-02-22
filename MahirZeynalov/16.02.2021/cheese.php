<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<h3>Shahmat</h3>
		<table width="300px" border="1px">
			<?php
			// ilk olaraq setirlerin sayi qeder sikl qururuq
			for ( $row = 0; $row < 8; $row++ )
			{
				print "<tr>";
				// sonra sutunlarin sayi qeder sikl qururuq
				for ( $col = 0; $col < 8; $col++ )
				{
					$total = $row + $col;
					/* sutunlar ve setirlerin cemi eger 2 ye bolunurse ag reng xana
					bolunmursa qara reng xana cap olunsun wertin yazrq */
					if ( $total % 2 == 0 )
					{
						print "<td height=30px width=30px bgcolor=#FFFFFF></td>";
					}
					else
					{
						print "<td height=30px width=30px bgcolor=#000000></td>";
					}
				}
				print "</tr>";
			}
			?>
		</table>
	</body>
</html>