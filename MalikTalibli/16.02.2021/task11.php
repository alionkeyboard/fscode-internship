<!DOCTYPE html>
<html>
	<body>

		<table>
			<th></th>
			<?php
			for ( $i = 'a'; $i <= 'h'; $i++ )
			{
				echo "<th>$i</th>";
			}

			for ( $i = 1; $i <= 8; $i++ )
			{
				$say = $i % 2;

				if ( $say == 1 )
				{
					echo '<tr><td>' . $i . '</td>';

					for ( $j = 0; $j < 8; $j++ )
					{
						$sa = $j % 2;
						if ( $sa == 1 )
						{
							echo '<td style="background-color: grey; width:50px;height:50px"></td>';
						}
						else
						{
							echo '<td style="background-color: black; width:50px;height:50px"></td>';
						}
					}

					echo '</tr>';
				}
				else
				{
					echo '<tr>
			<td>' . $i . '</td>';

					for ( $j = 0; $j < 8; $j++ )
					{
						$sa = $j % 2;
						if ( $sa == 1 )
						{
							echo '
			<td style="background-color: black; width:50px;height:50px"></td>
            ';
						}
						else
						{
							echo '
			<td style="background-color: grey; width:50px;height:50px"></td>
            ';
						}
					}
					echo '</tr>';
				}
			}
			?>


		</table>

	</body>
</html>
