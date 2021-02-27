<?php

use Rahim\Vk\VkClass;

if (isset($_POST['user_id'],$_POST['post']))
{
    require '../../vendor/autoload.php';
    $access_token   = new Rahim\Database\DatabaseClass();

    $user_id        = $_POST['user_id'];
    $post           = $_POST['post'];

    $access_token   = $access_token->Select("SELECT * FROM accounts WHERE user_id = ?",[$user_id]);
    $access_token   = $access_token[0]['access_token'];

    $postShare      = new VkClass();
    $postShare->postShare($user_id,$access_token,$post);
}
else
{
    header('location: ../../');
}