<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: text/plain");

function read_blog(){
    
    $arr = []; //yekun array
    
    $has_next_page = false; //paginationda novbeti sehife var mi?
    
    $page_to_look = 'https://www.booknetic.com/blog'; //hazirki dovrun postlari oxumali oldughu sehife
    
    $page_num = 0; //dovrun nomresi. buna uyghun olara oxunan sehifenin adi arrayda chixarilir
    
    do{
         
        //curl
        $curl = curl_init();
        curl_setopt( $curl , CURLOPT_URL , $page_to_look );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($curl);
        
        //butun postlar blog-item classli divin ichindedir
        $pattern = "/<div class=\"blog-item\">(.*?)<\/div>/s";
        
        //blog-itemi axtaririq
        if( preg_match_all($pattern, $html, $matches) ){
            
            //verilmish sehifenin indexe uyghun adi yaradilir
            $page_num++;
            $page_index = "page_" . $page_num;
            
            //page_index adli array. $arr-in daxilindeki array
            $arr[$page_index] = array();
            
            //blogitemin icindeki postlarin dovru
            foreach ( $matches[1] as $match ){
                
                $blog_post = []; //hazirki post
                
                $pattern = "/<h2>(.*?)<\/h2>/s";
                $blog_post['title'] = ( preg_match($pattern, $match, $title) ) ? $title[1] : '';
                
                $pattern = "/<span class=\"bl-date\">(.*?)<\/span>/s";
                $blog_post['date'] = ( preg_match($pattern, $match, $date) ) ? $date[1] : '';
                
                $pattern = "/<p>(.*?)<\/p>/s";
                $blog_post['description'] = ( preg_match($pattern, $match, $description) ) ? $description[1] : '';
                
                $pattern = "/<img src=\"(.*?)\"/s";
                $blog_post['image'] = ( preg_match($pattern, $match, $image) ) ? $image[1] : '';
                
                $pattern = "/<a href=\"(.*?)\"/s";
                $blog_post['url'] = ( preg_match($pattern, $match, $url) ) ? $url[1] : '';
                
                $arr[$page_index][] = $blog_post; //hazirki post barede elde etdiklerimizi yadda saxlayiriq
                
            }
            
        }
        
        //paginationda novbeti sehifeni axtaririq
        $pattern = "/<a class=\"page-link\" href=\"(.*?)\" rel=\"next\"/";
        
        if( preg_match($pattern, $html, $matches) )
        {
            $page_to_look = $matches[1]; //novbeti sehife vardirsa, novbeti dovrde oxumaq ucun qeyd edirik
            $has_next_page = true;
        }
        else
        {
            $has_next_page = false;
        }
        
        
    }while( $has_next_page );
    
    print_r($arr);
}

read_blog();

?>
