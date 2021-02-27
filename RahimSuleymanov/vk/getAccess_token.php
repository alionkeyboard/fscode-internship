<?php
$permission = [
    'offline',
    'wall',
    'groups',
    'email',
    'photos',
    'video'
];

$request_parametrs = [
  'client_id' => '7773288',
  'redirect_uri' => 'https://oauth.vk.com/blank.html',
  'response_type' => 'token',
  'display' => 'page',
  'scope' => implode(',',$permission),
  'v'=>5.69
];


$url ='https://oauth.vk.com/oauth/authorize?'.http_build_query($request_parametrs);

//echo $url;
//echo urldecode($url);
header('location:'.urldecode($url));
