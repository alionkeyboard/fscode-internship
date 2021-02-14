<?php

$str = 'suretli kod yazmaq her zaman yaxshi kod yazmaq demek deyil.   seliqeye ve hellin optimalligina da fikir vermek lazimdir.';

$noqte = TRUE;
$i     = 0;
while ( $str[ $i ] )
{
	if ( $noqte )
	{
		$str[ $i ] = strtoupper( $str[ $i ] );
	}
	if ( $str[ $i ] == '.' )
	{
		$noqte = TRUE;
	}
	else if ( $str[ $i ] != ' ' )
	{
		$noqte = FALSE;
	}
	$i++;
}
echo $str;

/*
noqte gordekde $noqte deyisheni true olur
ve bosluqdan ve noqteden ferqli ilk char 
noqte deyishenini false edir.
eger noqte true-dirse demeli 
son noqteden sonra herf ishelenmeyib
ve herfi boyuk yazmaq lazimdir
*/
?>
