<?php

  function checkRegex($regex,$text){
	  if( preg_match("/^\/.+\/[a-z]*$/i",$regex)){
	  //verilen ifade regexdise
		preg_match_all($regex, $text, $matches);
		 if(empty($matches[0])){
		 //arrayin bos olub olmadiqini yoxluyur 
		    echo "Axtardığınız regexə uyğun nəticə tapılmadı";
         } else {
		   //array bos deyilse uygun var demekdir
		    echo "Mətində ". count($matches[0])." uyğun nəticə tapıldı";
		    for ($i = 0; $i < count($matches[0]); $i++) {
			  foreach ($matches as $match) {
				echo "<br>".($i+1)." : ".$match[$i];
			  }  
		    }
         }
	  } else {
	  //verilen ifade regexe deyilse
	   	echo "Verilən ifadə düzgün regex deyil. 
		   Delimiter'lərdən istifadə etdiyinizdən əmin olun";
	  }
  }

     function callSubmit(){// formu post edirik
     if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" ) {
       if ( isset( $_POST["check"] ) ) {
         $regex = $_POST["regex"];
         $test = $_POST["test"];
         echo "<div class='style2'>" ;
           checkRegex($regex,$test);
         echo "</div>";
       }
     }
   }

?>