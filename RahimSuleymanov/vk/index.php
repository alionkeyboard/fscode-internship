<?php

$scope = [
    'notify',
    'friends',
    'photos',
    'audio',
    'video',
    'stories',
    'pages',
    'status',
    'wall',
    'groups',
    'notifications',
    'email'
];

$url ='https://oauth.vk.com/oauth/authorize?client_id=7773261&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope='.implode(',',$scope).'&response_type=token&v=5.130&__q_hash=2b3cb8dec2e2f8c06ef080aa1bd69a69';

header('location:'.$url);

?>
