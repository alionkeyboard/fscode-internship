<?php
use Rahim\Database\DatabaseClass;
require '../../vendor/autoload.php';
$accounts = new DatabaseClass();
$accounts = $accounts->Select("SELECT * FROM accounts ORDER BY id DESC");
foreach ($accounts as $account)
{
    $roles  = new DatabaseClass();
    $role   = $roles->Select("SELECT * FROM roles WHERE id = ?",[$account['role_id']]);
    echo '
    <tr>
        <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="account_'.$account['id'].'" name="accounts[]" value="'.$account['id'].'">
                <label for="account_'.$account['id'].'"></label>
            </span>
        </td>
        <td style="text-align: right">'.$account['first_name'].'<br/>'.$role[0]['name'].'</td>
        <td><i class="fa fa-share" data-toggle="modal" data-target="#sharePostModal"></i></td>
    </tr>
    ';
}