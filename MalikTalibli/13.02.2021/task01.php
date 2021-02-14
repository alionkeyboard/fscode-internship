<?php

$text = 'Bu cumlede tam-tamina alti soz var.';
//Sözlərin sayını boşluqlara görə tapacağıq. Cümlə boşluqla başladıla bilər. Ona görə əvvəldə boşluğa icazə vermirik.

if ( $text[ 0 ] === ' ' )
{
	echo "Cümlə boşluqla başlaya bilməz";
	die();
}

$word = 0;

for ( $i = 0; isset( $text[ $i ] ); $i++ )
{

	if ( $text[ $i ] == ' ' )
	{
		//Hər boşluqda $word 1 vahid artır.
		$word++;
		//Sözlər arasında bir neçə boşluq varsa.
		$s = $i + 1;
		if ( isset( $text[ $s ] ) )
		{
			for ( $s; $text[ $s ] == ' '; $s++ )
			{
				$i++;
			}
		}
	}
}

//Sonuncu sözdən sonra boşluq olmadığına görə alınan nəticəni özümüz 1 vahid artırırıq.
$word += 1;

echo "$word soz";

?>