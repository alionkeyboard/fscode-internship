<?php
$accounts = $conn->Select("SELECT * FROM accounts ORDER BY id DESC");
foreach ($accounts as $account)
{
    echo '
    <option value="'.$account['user_id'].'">'.$account['first_name'].'</option>
    ';
}
?>