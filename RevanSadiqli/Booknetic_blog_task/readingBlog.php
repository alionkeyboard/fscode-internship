<?php

   function blogRead($totalPage = 3){

     $arr = [];  // esas array
     $pageControl = 0;  
     $pageCounter = 1; 
     $curl = curl_init();
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );


     while ( $pageCounter <= $totalPage ) {

       if ( $pageControl == 10 ) {//page limitation'nin 10 olduqunu nezere alsaq
         $pageControl = 0;//
         $pageCounter++;//10 blogdan bir sehifeni deyiseciyik
       }

       $url = "https://www.booknetic.com/blog?page=".$pageCounter;// URL'de buna uygun deyisecek
       curl_setopt ( $curl, CURLOPT_URL, $url );
       $page = curl_exec ( $curl );

       $regexDiv = '/<div class="blog-item">(.*?)<\/div>/s'; // bloglarin div'i
       preg_match_all($regexDiv, $page, $blogs);

       if ( is_array( $blogs[0] ) || is_object( $blogs[0] ) ) {
         foreach ( $blogs[0] as $blog ) {

          /*********Title************/
           $regexTitle = '/<h2>(.*)<\/h2>/s';
           preg_match_all($regexTitle, $blog, $titles);
           $title = explode("\n",$titles[0][0]);

          /*********Date*************/
           $regexDate = '/<span class="bl-date">(.*?)<\/span>/s';
           preg_match_all($regexDate, $blog, $dates);
           $date = explode("\n",$dates[0][0]);
          
          /*******Description********/
           $regexDescripton = '/<p>(.*?)<\/p>/s';
           preg_match_all($regexDescripton, $blog, $descriptions);
           $description = explode("\n",$descriptions[0][0]);

          /*********Image Link********/
           $regexImg = '/<img src="(.*?)" alt="" class="img-fluid">\n<\/a>/s';
           preg_match_all($regexImg, $blog, $images);
           $image = explode("\n",$images[1][0]);


          /*******Blog URL************/
           $regexUrl = '/<\/p>\n<a href="(.*?)" class="btn btn-fill">Read More<\/a>/s';
           preg_match_all($regexUrl, $blog, $URLs);
           $blogurl = explode("\n",$URLs[1][0]);
 
           $arr=["page_".$pageCounter=>  // elde etdiyimiz melumatlari arraya atiriq
                     [["title" => @$title],
                     ["date" => @$date],
                     ["description" => @$description],
                     ["image" => @$image],
                     ["url" => @$blogurl]]];

           $pageControl++; // her blogdan bir $pageControl'u artiraciyiq

             echo "<pre>";
             print_r($arr);
             echo "</pre>"; 
         }
       }
     } 
   }


blogRead();
?>
