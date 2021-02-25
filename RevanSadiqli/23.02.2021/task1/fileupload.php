<?php
include "dbconnection.php";

  function imageUpload(){

    if(isset($_POST["upload"])) {

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
            echo "Fayl şəkil deyil";
            $errupload = 0;
          }

          if ($_FILES["image"]["size"] > 500000) {
          echo "Faylın həcmi çox böyükdür";
          $errupload = 0;
          }

          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
          echo "Ancaq JPG, JPEG, PNG & GIF faylları yükləyə bilərsiz";
          $errupload = 0;
          }

          if ($errupload == 0) {
            echo "Fayl yüklənmədi";
          } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<strong>Yüklənən şəkil: </strong>"."<br>";
            echo "<img src='$imgsrc' width='150' height='150' alt='Uploaded Image' >"."<br>";
            } else {
            echo "Fayl yüklənmədi";
            }
          }

            $sql = "INSERT INTO imageupload (imageurl)
            VALUES ('$filelocation')";
            $dbconnection->exec($sql);
            $query = $dbconnection->query("SELECT * FROM imageupload")->fetchAll();
            echo "<strong>Database'də olan bütün şəkillərin linki </strong>"."<br>";
            foreach ($query as $row) {
                echo $row['imageurl']."<br>";
            }
  
            $dbconnection = null;
    }
  }
   imageUpload();

?>