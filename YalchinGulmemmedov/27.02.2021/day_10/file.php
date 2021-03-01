<?php
include 'config.php';

if(isset($_POST['download'])) {
    $img=upload_image($_FILES['image']);
    
    $img_db_name=$img['file'];
    
    $model=new Model;

    $insert=Model::$conn->exec("INSERT INTO `image`( `image_url`) VALUES ('$img_db_name')");
    
    $select=Model::$conn->query("SELECT * FROM image");
    $row=$select->fetchAll(PDO::FETCH_CLASS);

    foreach($row as $r){
        echo $r->image_url."<br>";
    }


}


function upload_image($doc){

      
    if(is_uploaded_file($doc['tmp_name']))
    {
        $max_size=1024*1024*5;
        $file_type=['image/png','image/jpeg','image/jpg','image/gif'];
        $format=$doc['type'];
        $file="upload";
        $imageName=explode(".",$doc['name']);
        $new_imageName=uniqid().".".$imageName[1];
        $message=[];

        if($doc['error']==4)
        {
            $message['error']= "Bir sekil secin.";
        }

        else if($doc['size']>$max_size){
            $message['error']="sekil olcusu 5mb olar biler en cox";
        }

        else if(!in_array($format,$file_type))
        {
            $message['error']= "File tipi 'png','jpg','jpeg' ve ya 'gif' olmalidir";
        }
        else
        {
            $upload=move_uploaded_file($doc['tmp_name'],$file."/".$new_imageName);

            if($upload)
            {
              $message['file']="$new_imageName";
              
            }
            
            else
            {
                $message['error']="yukleme zamani bir xeta yasandi";
            }

        }

    }
    else
    {
        $message['error']= "Sekil yuklenerken bir xeta yasandi";
    }
    return $message;
}



?>