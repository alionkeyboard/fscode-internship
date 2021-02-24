<?php

$i          = 1;
$all        = [];

$ch = curl_init(); // curl  qurulmasi
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );

for ( $page = 1; $page <= ( isset( $page_count )  ? $page_count : 1 ); $page++ ) // Butun sehifelerde ishlemesi ucun loop
{

	$url = "https://www.booknetic.com/blog?page=$page";

	curl_setopt( $ch, CURLOPT_URL, $url );

	$site = curl_exec( $ch );

	// postlari elde etmek ucun bize lazim olan hisseinin cekilmesi
	preg_match_all( '@<div class="blog-item">(.*?)</div>@si', $site, $posts );

	if ( ! isset( $page_count ) )
	{
		// Page sayinin tapilmasi ucun lazim olan hissenin cekilmesi
		preg_match_all( '@li class="page-item"><a class="page-link" href="https://www\.booknetic\.com/blog\?page=(.*?)">(.*?)</a></li>@si', $site, $pages );

		// burda  esas sehifeden gedilen butun diger sehifelerinin linkini veren array-den en boyuk elementi tapib yuxaridaki loop ucun shert olaraq gonderirik
		if ( isset( $pages[ 1 ] ) )
		{
			$page_count = max( $pages[ 1 ] );
		}
	}

	foreach ( $posts[ 0 ] as $post ) // Bu loop her page-deki butun postlari o page-in arrayine elave edir
	{
		// post melumatlarinin elde edilmesi
		preg_match_all( '/<h2>(.*?)<\/h2><\/a>/', $post, $title );
		preg_match_all( '/<span class="bl-date">(.*?)<\/span>/', $post, $date );
		preg_match_all( '/<p>(.*?)<\/p>/', $post, $description );
		preg_match_all( '/<img src="(.*?)" alt="" class="img-fluid">/', $post, $image );
		preg_match_all( '/<a href="(.*?)" class="btn btn-fill">/', $post, $url );

		$title       = $title[ 1 ][ 0 ];
		$date        = $date[ 1 ][ 0 ];
		$description = $description[ 1 ][ 0 ];
		$image       = $image[ 1 ][ 0 ];
		$url         = $url[ 1 ][ 0 ];

		// melumatlarin array-a daxil edilmesi
		$all[ "page_$page" ][ "post_$i" ] = [
			'title'       => $title,
			'date'        => $date,
			'description' => $description,
			'image'       => $image,
			'url'         => $url
		];
		$i++;
	}
}

curl_close( $ch );

print_r( $all );