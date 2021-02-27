<?php

$request_parametrs = [
    'owner_id'=>'641613724',
    'friends_only'=>1,
    'message'=>'test mesaj 10',
    'access_token'=>'c98d3bec4e6d92da1c237cb4e3dadfe1686cc0baf0a30cf77a1768f70d9e68be937ed090bfded531b6ad2',
    'v' => '5.21'
];

$url ="https://api.vk.com/method/wall.post?".http_build_query($request_parametrs);

echo file_get_contents($url);https://oauth.vk.com/blank.html#access_token=dabd52ebd436c0cb7ea36f9730542235c2db6c6b50acf72e8492b100be263019d032fb48fe0b4a9318bba&expires_in=0&user_id=641613724&email=rahim.suleymanov94@gmail.com