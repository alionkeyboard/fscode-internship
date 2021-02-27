<?php
include "dbconnection.php";

  function imageUpload(){

    if(isset($_POST["upload"])) {

        global $dbconnection;
        global $dbconnection;

        $errupload = 1;
        $target_dir = "images/";
        $actualname =  explode(".",$_FILES["image"]["name"]);

        $newname =uniqid().".".$actualname[1];
        $imgsrc = $target_dir.$newname;

        $target_file = $target_dir . basename($newname);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"]);

        $filelocation = realpath($target_dir)."\\".$newname;
        $filelocation = addslashes($filelocation);

          if($check ==   false) {
            echo "<div class = 'style2'>
            *Fayl şəkil deyil
            </div>";
            $errupload = 0;
          }

          if ($_FILES["image"]["size"] > 500000) {
          echo "<div class = 'style2'>
            *Faylın həcmi çox böyükdür
            </div>";
          $errupload = 0;
          }

          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
          echo "<div class = 'style2'>
            *Ancaq JPG, JPEG, PNG & GIF faylları yükləyə bilərsiz
            </div>";
          $errupload = 0;
          }

          if ($errupload == 0) {
            echo "<div class = 'style2'>
           *Fayl yüklənmədi
            </div>";
          } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              header('Location: slideshow.php');
              $sql = "INSERT INTO imageupload (imageurl)
              VALUES ('$filelocation')";
              $dbconnection->exec($sql);

              $dbconnection = null;
            } else {
            echo "<div class = 'style2'>
              *Fayl yüklənmədi
            </div>";
            }
          }


            

    }
  }
   imageUpload();

?>