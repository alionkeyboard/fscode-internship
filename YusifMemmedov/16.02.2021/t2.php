<html>
	<head>
		<style>
            table {
                border-collapse: collapse;
            }

            table tr td {
                text-align: center;
            }

            .tek {
                background-color: beige;
            }

            .cut {
                background-color: brown;
            }

            .xana {
                height: 50px;
                width: 50px;
                box-sizin: border-box;
            }

            td:first-child {
                width: 20px;
                background-color: black;
                color: white;
            }

            tr:last-child {
                height: 20px;
                background-color: black;
                color: white;
            }
		</style>
	</head>

	<body>
		<table>
			<tbody>
				<?php

				ini_set( 'display_errors', 1 );
				ini_set( 'display_startup_errors', 1 );
				error_reporting( E_ALL );

				//if-elseden yayinmaq uchun klaslari arraya yighdim
				$cls = [ 'tek', 'cut' ];

				for ( $i = 8; $i > 0; $i-- )
				{

					//birinci siradaki reqemler nomrelenir
					echo "<tr><td>$i</td>";

					for ( $j = 0; $j < 8; $j++ )
					{

						//xanalarin tek-cut novbede olmasini bilib css klas secmek
						$klas = $cls[ ( $i + $j ) % 2 ];

						//xanalar chekilir
						echo "<td class='$klas xana'></td>";
					}

					echo "</tr>";
				}

				//dibdeki herflerin yazilmasi
				$herf = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h' ];
				echo "<tr><td></td>";

				foreach ( $herf as $h )
				{
					echo "<td>$h</td>";
				}

				echo "</tr>";

				?>
			</tbody>
		</table>
	</body>
</html>