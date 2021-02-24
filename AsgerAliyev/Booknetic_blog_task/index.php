<?php

$i          = 1;
$all        = [];
$page_count = 1;

for ( $page = 1; $page <= $page_count; $page++ )
{

	$url = "https://www.booknetic.com/blog?page=$page";
	$ch  = curl_init();

	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
	curl_setopt( $ch, CURLOPT_URL, $url );

	$site = curl_exec( $ch );

	curl_close( $ch );

	preg_match_all( '@<div class="blog-item">(.*?)</div>@si', $site, $posts );
	preg_match_all( '@li class="page-item"><a class="page-link" href="https://www\.booknetic\.com/blog\?page=(.*?)">(.*?)</a></li>@si', $site, $pages );

	$page_count = max( $pages[ 1 ] );

	foreach ( $posts[ 0 ] as $post )
	{
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

		$all[] = [
			"page_$page" => [
				"post_$i" => [
					'title'       => $title,
					'date'        => $date,
					'description' => $description,
					'image'       => $image,
					'url'         => $url
				]
			]
		];
		$i++;
	}
}

print_r( $all );