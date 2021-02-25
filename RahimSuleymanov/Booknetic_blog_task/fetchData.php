<?php

function get_data ( $url )
{
	$ch      = curl_init();
	$timeout = 5;
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	curl_setopt( $ch, CURLOPT_USERAGENT, 'spider' );
	curl_setopt( $ch, CURLOPT_HEADER, FALSE );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
	$data = curl_exec( $ch );
	curl_close( $ch );

	return $data;
}

$loop       = true;
$i          = 1;
$pageCount  = 1;
$arr        = [];//butun melumatlar bu arrayde saxlanacaq
$daily      = [];//gundelik melumatlari bu arraye elave edicik
$news       = [];//her bir xeberin parametrlerini bu arrayde tutaciq
while($loop === true)
{
    $url = 'https://www.booknetic.com/blog?page='.$i;
    $data = get_data($url);

    //sehife sayi
    if($i === 1)
    {
        preg_match_all('@<li class="page-item">(.*?)</li>@si',$data,$pages);
        $pageCount      = count($pages[1]);
    }

    if($i <= $pageCount && $pageCount !== 0)
    {
        // basliqlari aliram
        preg_match_all('@<h2>(.*?)</h2>@si',$data,$titles);
        
        // tarixleri aliram
        preg_match_all('@<span class="bl-date">(.*?)</span>@si',$data,$dates);

        // descriptionu aliram
        preg_match_all('@<p>(.*?)</p>@si',$data,$descriptions);

        // sekili aliram
        preg_match_all('@<img src="(.*?)" alt="" class="img-fluid">@si',$data,$images);

        // linkin aliram
        preg_match_all('@<a href="(.*?)" class="btn btn-fill">Read More</a>@',$data,$urls);

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
                    
                    $daily[]                = $news;
                    $new                    = [];
                }
            }
            
            $key        = 'page_'.$i;
            $arr[$key]  = $daily;
            $daily      = [];
        }
        $i++;
    }
    else
    {
        $loop   = false;
    }
}

echo '<pre/>';

print_r($arr);