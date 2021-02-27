<?php
use Rahim\Database\DatabaseClass;

$apis = $conn->Select("SELECT * FROM apilist ORDER BY id DESC");
foreach ($apis as $api)
{
    echo '<option value="'.$api['client_id'].'">'.$api['name'].'</option>';
}
?>