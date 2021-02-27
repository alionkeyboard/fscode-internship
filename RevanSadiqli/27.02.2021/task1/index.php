<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az" >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="slide.css" rel="stylesheet" />
    <title>Şəkil yüklə</title>
 </head>
<body>
    


   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">   
     <div class = "style1">
       <div class="container">
         <div class="row">
          <div class ="col-md-6"> 
            <h2>Şəkil yüklə</h2><br>
            <input type="file"  name="image" id="file" required><br><br>
          </div>
         <div class ="col-md-6"><br> 
            <button type="submit"  name="upload">
            Yüklə
            </button>
         </div>
       </div>
     </div>
   </div>
  </form>   
  
    <?php
    include "fileupload.php";
    ?>    


</body>
</html>