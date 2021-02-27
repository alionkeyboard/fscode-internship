<?php

$request_parametrs = [
    'owner_id'=>'641613724',
    'friends_only'=>1,
    'message'=>'test mesaj 7',
    'access_token'=>'0f20611d6de5a89557c14b07d5db75b8132e34591f64efb28d4569521e33929e7f3f412e1a757342bb9fd',
    'v' => '5.21'
];

$url ="https://api.vk.com/method/wall.post?".http_build_query($request_parametrs);

echo file_get_contents($url);