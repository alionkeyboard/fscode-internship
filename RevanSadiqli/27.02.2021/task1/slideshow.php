<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="slide.css" rel="stylesheet" />
    <title> Slide Show </title>
 </head>
<body>

  <?php
  include "dbconnection.php";

    // databaseden melumatlari cekirik
    $query = $dbconnection->query("SELECT * FROM imageupload")->fetchAll();
        
        //row qeder loop donur
        foreach ( $query as $row ) {

          $path = $row[ 'imageurl' ];//row adi imageurl olani cekirik'
          $patharr = explode("\\",$path);// path'lar backslashlarla saxlandigi ucun
          $src = "images/".$patharr[7];// explode'la arraya cevirib sekilin adini aliriq
          $id = $row[ 'id' ];
          $date = $row[ 'uploadtime' ];

          echo    "<div class = 'container'>
                     <div class = 'slider fade' style='text-align:center'> 
                       <img src = '$src' style='width:100%;height:100%;'> 
                       <div class = 'textid'>Image id: $id</div> 
                       <div class = 'textdate'>Upload Time: $date</div> 
                    </div>
                  </div>"; 
        }
?>
              
<script>

var index = 0; 
showSlides(); 
   
function showSlides() { 
    var i; 
  
    //class adi slider olan cagiririq
    var slides = document.getElementsByClassName("slider");  
        
    for (i = 0; i < slides.length; i++) { 
        // ilk once displayi none edirik
        slides[i].style.display = "none";  
    } 
   
    index++;  
   
     // sekiller qutardiqdan sonra yeniden baslamsi ucun indexi 1 edirik
    if (index > slides.length)  
    { 
        index = 1; 
    } 
    // sekili gostermek ucun displayi block edirik
    slides[index - 1].style.display = "block";   
    // 3 saniyeden bir sekiller deyisecek
    setTimeout(showSlides, 3000);  
} 
</script>

</body>
</html>