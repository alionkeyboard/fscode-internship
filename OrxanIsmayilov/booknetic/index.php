<?php


function blog($url)
{
    if ( $curl = curl_init() )
    {
        curl_setopt_array( $curl, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30000,
            CURLOPT_USERAGENT      => "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36",
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_HTTPHEADER     => [
                "accept: /",
                "accept-language: en-US,en;q=0.8",
            ],
        ] );

        $content = curl_exec( $curl );
        $html    = str_replace( [ "\n", "\t", "\t", "  " ], '', $content );

        $str = '<span class="bl-date">(.*?)<\/span>';
        preg_match_all( '/' . $str . '/', $html, $all );
        $date = $all[1];
        
        $str = '<h2>(.*?)<\/h2>';
        preg_match_all( '/' . $str . '/', $html, $all );
        $title = $all[1];
        array_shift($title);
        
        $str = '<p>(.*?)<\/p>';
        preg_match_all( '/' . $str . '/', $html, $all );
        $description = $all[1];
        
        $str = '<a href="(.*?)"';
        preg_match_all( '/' . $str . '/', $html, $all );
        $url = $all[1];
        
        $str = '<img src="(.*?)"';
        preg_match_all( '/' . $str . '/', $html, $all );
        $images = $all[1];
        
        $blog = [];
       
        for($i=0;$i<count($date);$i++){
            $blog[] = [
                    "title" => $title[$i],
                    "date" => $date[$i],
                    "description" => $description[$i],
                    "url" => $url[$i],
                    "image" => $images[$i]
                ];
            
        }

        return $blog;
    }
	
		
}

$page=[];
function pages($page){
    $i = 1;
    $url = "https://www.booknetic.com/blog";

    while(!empty(blog($url)))
    {
    $url = "https://www.booknetic.com/blog?page=$i";

    if(empty(blog($url)))
    {
        break;
    }
    
    $page["Page$i"] = blog($url);
    $i++;
    }

    return $page;
}
echo "<pre>"; print_r(pages($page)); echo "</pre>"; 