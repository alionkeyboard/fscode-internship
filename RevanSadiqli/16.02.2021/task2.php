<?php

function sahmat_cek ()
{
	$str = "abcdefgh";//string for the bottom part border of the chessboard
	echo "<table width='270px' cellspacing='0px' cellpadding='0px' >";

	echo "<thead>";
	echo "<tr>";//the black line for the top part border of the chessboard
	echo "<td height=4px  bgcolor=#312e2b></td>";
	for ( $k = 1; $k <= 8; $k++ )
	{//iterating every row
		echo "<td height=4px bgcolor=#312e2b></td>";
	}
	echo "<td height=4px bgcolor=#312e2b></td>";
	echo "</tr>";
	echo "</thead>";

	for ( $i = 1; $i <= 8; $i++ )
	{//row for the table
		echo "<tr>";
		for ( $j = 0; $j <= 8; $j++ )
		{//column for the table
			$toplam = $i + $j;
			if ( $toplam % 2 == 0 && $j != 0 )
			{
				/*If the sum of rows and columns is equal to even number
				and j is not equal to the 0(because if j is equal to 0 it will print the left
				side border of the chessboard), the color of the table data
				will be # b58863, otherwise, the color will be # f1d9b5*/
				echo "<td height=30px width=50px bgcolor=#b58863></td>";
			}
			else if ( $toplam % 2 != 0 && $j != 0 )
			{
				echo "<td height=30px width=50px bgcolor=#f1d9b5></td>";
			}

			if ( $j == 8 )
			{    //right side border of the chessboard
				echo "<td  width=10px bgcolor=#312e2b></td>";
			}
			else if ( $j == 0 )
			{//read line 23
				echo "<td  width=15px bgcolor=#312e2b>";
				echo "<span style=color:#989695;><pre>" . $i . "</pre></span";
				echo "</td>";
			}
		}
	}
	echo "</tr>";
	echo "<tfoot>";
	echo "<tr>";
	echo "<td height=10px  bgcolor=#312e2b></td>";
	for ( $k = 0; isset( $str[ $k ] ); $k++ )
	{
		//printing a to h for the bottom part border of the chessboard
		echo "<td height=10px bgcolor=#312e2b>
                <span style=color:#989695;><pre>" . $str[ $k ] . "</pre></span></td>";
	}
	echo "<td height=10px bgcolor=#312e2b></td>";
	echo "</tr>";
	echo "</tfoot>";
}

sahmat_cek();

?>