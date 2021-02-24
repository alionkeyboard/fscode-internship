<?php

if ( isset( $_POST[ 'submit' ] ) )
{
    $name       = $_FILES[ 'file' ][ 'name' ];
    $temp_name  = $_FILES[ 'file' ][ 'tmp_name' ];

    if( isset( $name ) and !empty( $name ) )
    {
        $location = 'uploads/';

        if( move_uploaded_file( $temp_name, $location . $name ) ) // shekli uploads folderine elave edirik
        {
            $url = $location . $name;

            $sql = 'INSERT INTO pictures (image_url) VALUES (:image_url)'; // folderdeki linki database-e elave edirik burda
            $res = $conn->prepare( $sql );
            $res->bindParam( ':image_url', $url );
            $res->execute();
        }
    }
    else
    {
        echo 'You should select a file to upload !!';
    }
}

$getLinks =  $conn->prepare( 'SELECT * FROM pictures' ); // DB-dan table-daki melumatlari cekirik, ve html hissesinde ekrana chap edirik
$getLinks->execute();
$links = $getLinks->fetchAll();
