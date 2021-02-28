<?php

$patternID ="/(.*?),/i";
$patternToken = "/\s*,(.*?)$/";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  //check if user exist in selectbox
  if($_POST['users'][0]!=""){

    //foreach selected selectbox get value

    foreach($_POST['users'] as $selected){

      //with pattern match id and toker
      preg_match_all($patternID,$selected,$id);
      preg_match_all($patternToken,$selected,$token);
      $id = $id[1][0];
      $token = $token[1][0];

      $message = $_POST['message'];

      if(empty($message))
        {
            echo "<p class='error'>Write something to post, cant be empty.</p>";
        }
        else
        {

          //call curl
          $url = "https://api.vk.com/method/wall.post?owner_id=".$id."&friends_only=0&from_group=0&message=". urlencode( $message ) ."&access_token=".$token."&v=5.52";
          $response = curl($url);

          //check curl response
          if(!empty($response))
          {
              echo "<h1>Posted!</h1>";
          }
          else
          {
              echo "<h1>Something went wrong!</h1>";
          }
        }  
    }
    }else
    {
        echo "<p class='error'>Underfined user, select user if exists</p>";
    }
        
}
//function to run curl
function curl( $url ) {
    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );

    $response = curl_exec( $ch );
    curl_close( $ch );
    return $response;
}
