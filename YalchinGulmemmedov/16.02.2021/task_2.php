<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>

		<table width="300px" border="1px">
			<!-- cell 270px wide (8 columns x 60px) -->
			<?php
			for ( $row = 1; $row <= 8; $row++ )
			{
				echo "<tr>";
				echo "<th>" . $row;

				for ( $col = 1; $col <= 8; $col++ )
				{
					$total = $row + $col;

					if ( $total % 2 == 0 )
					{
						echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
					}

					else
					{
						echo "<td height=30px width=30px bgcolor=#F5B041></td>";
					}

				}
				echo "</tr>";

			}
			?>
		</table>
	</body>
</html>
