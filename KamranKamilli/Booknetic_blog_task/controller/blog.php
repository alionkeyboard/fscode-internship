<?php

//curl setup
function curl($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

//pattern for each data
$patternDate = '/<span class="bl-date">(.*?)<\/span>/';
$patternDescription = "/<p>(.*?)<\/p>/s";
$patternTitle = "/<h2>(.*?)<\/h2>/s";
$patterImage = "/<img(?:.*?)src=\"((?:http|https):\\/\\/www.booknetic.com\\/uploads\\/posts\\/.+?)\"/i";
$patternPages = '/<li class="page-item">(.*?)<\/li>/';
$patterLink  = "/href=\"((?:http|https):\\/\\/www.booknetic.com\\/blog\\/.*?)\"/i"; 

$currentPage = 1;
$url = "https://www.booknetic.com/blog?page=".$currentPage;
$response = curl($url);
preg_match_all($patternPages,$response,$pages);
$totalPages = count($pages[1])+1;

$arr = array();

for($currentPage; $currentPage<=$totalPages; $currentPage++)
{
    
    $url = "https://www.booknetic.com/blog?page=".$currentPage;
    $response = curl($url);
    //matching pattern
    preg_match_all($patternTitle,$response,$title);
    preg_match_all($patternDate,$response,$date);
    preg_match_all($patternDescription,$response,$description);
    preg_match_all($patterImage ,$response,$img);
    preg_match_all($patterLink,$response,$links);

    //deleting duplicate links
    $links = array_unique($links[1]);

    //setting an array
    for($i=0;$i<count($date[1]);$i++)
    {
        //skip first element, no need
        $arr['page_'.$currentPage][$i]['title'] = $title[1][$i+1];

        $arr['page_'.$currentPage][$i]['date'] = $date[1][$i];

        //skip first element, no need
        $arr['page_'.$currentPage][$i]['description'] = $description[1][$i+1];
        $arr['page_'.$currentPage][$i]['image'] = $img[1][$i];

        //each key in links array goes every 3 unit 0,3,6...
        $arr['page_'.$currentPage][$i]['url'] = $links[$i*3];
        
    }

}
//var_dump($arr);
?>
  
