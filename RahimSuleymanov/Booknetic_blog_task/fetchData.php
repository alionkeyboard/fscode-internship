<?php

function get_data ( $url )
{
	$ch      = curl_init();
	$timeout = 5;
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	curl_setopt( $ch, CURLOPT_USERAGENT, 'spider' );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
	curl_setopt( $ch, CURLOPT_HEADER, FALSE );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
	$data = curl_exec( $ch );
	curl_close( $ch );

	return $data;
}


$url = 'https://www.booknetic.com/blog';
$data = get_data($url);
$pattern = '@<li class="page-item">(.*?)</li>@si';
preg_match_all($pattern,$data,$matches);
// blog paylasildigini kontrol etdim

if(count($matches[1]) !== 0)
{
    $arr    = [];//butun melumatlar bu arrayde saxlanacaq
    $daily  = [];//gundelik melumatlari bu arraye elave edicik
    $news   = [];//her bir xeberin parametrlerini bu arrayde tutaciq

    for($i=1;$i<=count($matches[1]);$i++)
    {
        $url = 'https://www.booknetic.com/blog?page='.$i;
        $data = get_data($url);
        
        // basliqlari aliram
        $pattern = '@<h2>(.*?)</h2>@si';
        preg_match_all($pattern,$data,$titles);
        
        // tarixleri aliram
        $pattern = '@<span class="bl-date">(.*?)</span>@si';
        preg_match_all($pattern,$data,$dates);

        // descriptionu aliram
        $pattern = '@<p>(.*?)</p>@si';
        preg_match_all($pattern,$data,$descriptions);

        // sekili aliram
        $pattern = '@<img src="(.*?)" alt="" class="img-fluid">@si';
        preg_match_all($pattern,$data,$images);

        // linkin aliram
        $pattern = '@<a href="(.*?)" class="btn btn-fill">Read More</a>@';
        preg_match_all($pattern,$data,$urls);

        if(count($titles[1]) !== 0)
        {
            for($j=0;$j<count($titles[1]);$j++)
            {
                /**
                 * j - ni ona gore 1 den baslatdim ki butun sehifelerde  0 ci element kimi
                 * <h2>Blog</h2> yazilib
                 */
                if($j !== 0)
                {
                    $news['title']          = $titles[1][$j];
                    $news['date']           = $dates[1][$j-1];
                    $news['descriptions']   = $descriptions[1][$j];
                    $news['image']          = $images[1][$j];
                    $news['url']            = $urls[1][$j-1];
                    
                    $daily[] = $news;

                    $new     = [];
                }
            }
            $key = 'page_'.$i;
            $arr[$key] = $daily;
            $daily = [];
        }
    }
}

echo '<pre/>';

print_r($arr);