<?php

$url = 'https://www.havaproqnozu.com/baki-bu-gun-hava-nece-olacaq.html';

$file_headers = @get_headers( $url );

if ( $file_headers[ 0 ] == 'HTTP/1.1 404 Not Found' )
{
	return FALSE;
}
else
{
	$site = file_get_contents( $url );

	preg_match_all( '@<span class="maksDerece">(.*?)</span><br>@si', $site, $en_isti );
	preg_match_all( '@<span class="minDerece">(.*?)</span><br>@si', $site, $en_soyuq );
	preg_match_all( '@<li class="list-group-item"><span class="badge">(.*?)</span> Qürub</li>@si', $site, $saat );
	preg_match_all( '@<td align="center" data-title="Külək">(.*?)</td>@si', $site, $kulek );
	preg_match_all( '@<td align="center" data-title="Rütubət"><span class="nemDerece">(.*?)</span></td>@si', $site, $nem_orani );
	preg_match_all( '@<td align="center" data-title="Hiss edilir"><span class="hisDerece">(.*?)</span></td>@si', $site, $hiss );

	$gunorta_kulek        = $kulek[ 1 ][ 2 ];
	$gunorta_nem          = $nem_orani[ 1 ][ 2 ];
	$gunorta_hiss_istilik = $hiss[ 1 ][ 2 ];
	$en_isti_hava         = $en_isti[ 1 ][ 0 ];
	$en_soyuq_hava        = $en_soyuq[ 1 ][ 0 ];
	$qurub                = substr( $saat[ 1 ][ 0 ], -5 );
	$gun_cixir            = substr( $saat[ 1 ][ 0 ], 0, 5 );
}
