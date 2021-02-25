<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!file_exists('images')) {
    mkdir('images', 0777, true);
}

$tmp_name = $_FILES['file']['tmp_name'];
$image_url = 'images/' . basename($_FILES['file']['name']);

if( !file_exists( $image_url ) ){
    
    if( move_uploaded_file( $tmp_name , $image_url ) ){
        
        include 'db.php';
        $img_db = new ImageDB();
        $img_db->insert_image( $image_url );
        
    }
    else
    {
        die('something went wrong');
    }
    
}
else
{
    die('fayl movcuddur');
}

header('Location: index.php');
?>