<?php

use Rahim\Vk\VkClass;

if(isset($_POST['apiID'],$_POST['url']))
{
    require '../../vendor/autoload.php';

    $apiID  = $_POST['apiID'];
    $url    = $_POST['url'];

    $access_token_fetch = explode('access_token=',$url);
    $access_token_fetch = explode('&expires_in=0&user_id=',$access_token_fetch[1]);
    $access_token       = $access_token_fetch[0];

    $user_id            = explode('&email',$access_token_fetch[1]);
    $user_id            = $user_id[0];

    $details    = new VkClass();
    $details    = $details->usersGet($user_id,$access_token);

    $details    = explode('first_name":"',$details);

    $details    = explode('","id":',$details[1]);
    $name       = $details[0];

    $db         = new \Rahim\Database\DatabaseClass();

    $ckeckUser  = $db->Select("SELECT * FROM accounts WHERE user_id = ?",[$user_id]);

    if(count($ckeckUser) === 0)
    {
        $db->Insert("INSERT INTO accounts(first_name,access_token,user_id,role_id) VALUES (?,?,?,?)",[$name,$access_token,$user_id,1]);
        echo 'notFound';
    }
    else
    {
        $access_token = explode("access_token=",$url);

        $access_token = explode("&expires_in",$access_token[1]);

        $access_token = $access_token[0];

        $db->Update("UPDATE accounts SET access_token=? WHERE user_id=?",[$access_token,$user_id]);

        echo 'found';
    }
}
else
{
    header('location: ../../');
}