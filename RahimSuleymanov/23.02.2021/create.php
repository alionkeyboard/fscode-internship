<?php
if (!empty($_FILES)) 
{
    if(is_array($_FILES['file']['name']))
    {
        echo 'Hackmi etmək istəyirsən?';
    }
    else
    {
        if(!in_array($_FILES['file']['type'],['image/jpeg','image/png']))
        {
            echo 'Hackmi etmək istəyirsən?';
        }
        else
        {
            $uploadDir = 'assets/uploads';
            $tmpFile = $_FILES['file']['tmp_name'];
            $filename = $uploadDir.'/'.time().'-'. $_FILES['file']['name'];
            if(move_uploaded_file($tmpFile,$filename))
            {
                include 'include/config.php';

                $save=$conn->prepare("INSERT INTO images(image_url) VALUES (?)");
          	    $save->execute([time().'-'. $_FILES['file']['name']]);

                echo 'true';
            }
            else
            {
                echo 'Bir şeylər yanlış gedir! biraz sonra bir daha cəhd edin';
            }
        }
    }
}
else
{
    header('location:index.php');
}