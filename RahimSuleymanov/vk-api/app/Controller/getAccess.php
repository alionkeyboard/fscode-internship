<?php
use Rahim\Vk\VkClass;

if (isset($_POST['client_id']))
{
    require '../../vendor/autoload.php';

    $client_id = $_POST['client_id'];

    $get_access = new VkClass();
    $url        = $get_access->getAccess($client_id);

    echo $url;
}
else
{
    header('location: ../../');
}
