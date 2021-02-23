<?php
include './config/dbconnect.php';

$message = "";
$dir = "images/";

if($_SERVER['REQUEST_METHOD']==='POST')
{
    if(empty($_FILES['image']['name'])){

        $message = "Choose an image!";
    }
    else{

        $imageName = basename($_FILES['image']['name']);
        $imagePath = $dir . $imageName;
        $imageType = pathinfo($imagePath,PATHINFO_EXTENSION);
        $arr = array('png','jpg','jpeg','gif');
        if(!in_array($imageType,$arr))
        {
            $message = "Only png, jpg, jpeg, gif format images acceptable";
        }
    }

    if(empty($message) && move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)){

        $sql = "INSERT INTO images (image_name,image_url) VALUES (?,?)";

        if($stmt = $db->prepare($sql)){
            
            $stmt->bind_param("ss",$pimageName,$pimagePath);
            $pimageName = $imageName;
            $pimagePath = $imagePath;

            if($stmt->execute()){

                header('Location:index.php');
                exit();
            }
            else{

                $message = "Something went wrong";
            }

            $stmt->close();
        }
        $db->close(); 
    } 
}
?>