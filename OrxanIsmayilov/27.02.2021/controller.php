<?php
include('connection.php');

if(isset($_POST['upload']))
{
    if($_FILES['image']['name'] != null)
    {
        $image = $_FILES['image']['name'];
        $upload = "images/".basename($image);
        $insert = "INSERT INTO images (image_url) VALUES ('$upload')";
        $conn->exec($insert);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $upload))
        {
            header("location:index.php");
        }else
        {
           echo "yuklenmedi";
        }
        
    }else
    {
        echo "File secin";
    }
 
}


  
if(isset($_GET['delete_image']) && $_GET['delete_image'] == "ok")
{
    $image = $conn->prepare("SELECT image_url FROM images WHERE id='".$_GET['id']."'");
    $image->execute();
    $result = $image->fetch();
    unlink($result['image_url']);

    $delete = "DELETE FROM images WHERE id = '".$_GET['id']."'";
    $conn->exec($delete);
   
    if($conn) 
    {
        header("location:index.php");
    }else 
    {

      echo "silinmedi";
    }

  }