<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az" >
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Şəkil yüklə</title>
 </head>
<body>



  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <h2>Şəkil yüklə</h2>
         <input type="file"  name="image" id="file" required><br><br>
         <button type="submit"  name="upload">
         Yüklə
         </button>
  </form>   
      
    <?php
    include "fileupload.php";
    ?>    

</body>
</html>