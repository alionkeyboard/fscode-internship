<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 * bu sehifede access gran eden istifadechilerin qeydiyyati bash verir
 * hem de evvel qeyd olmushlarin siyahisi verilir
 * yazilmish istifadechilerin adindan yazmaq uchun 'CREATE a POST' linkine basin
 */
include 'db.php';

//db instance yaradilir
// istifadecilerin adlari htmlinin icinde $vk_user_db->fetch_users() etmekle cagirilir
$vk_user_db = new VKUsersDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if( isset($_POST['token_link']) )
    {
        //bu sehifeye post request ile geldikde 
        //url inputuna daxil edilmish tokenli url emal olunur
        
        list( , $params) = explode('#', $_POST['token_link']);
        list($token, , $vk_id) = explode( '&', $params );
        
        list( , $token) = explode( '=', $token);
        list( , $vk_id) = explode( '=', $vk_id);
        
        //istifadechinin adini oxuyub dbya yazmaq
        $user_info = file_get_contents("https://api.vk.com/method/account.getProfileInfo?access_token=$token&v=5.57");
        $user_info_json = json_decode($user_info);
        $name = $user_info_json->response->first_name . ' ' . $user_info_json->response->last_name;
        
        //token ve diger melumatlarin bazaya yazilmasi
        $vk_user_db->upsert_user($vk_id ,$token, $name);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class='row'>
  	<div class='col-12 d-flex justify-content-center'>
  		<div class='my-3'>
  			<a target='_blank' href="https://oauth.vk.com/authorize?client_id=6602634&scope=wall,offline&redirect_uri=https://oauth.vk.com/blank.html&response_type=token" class='btn btn-primary'>GRANT ACCESS</a>
  			<a href="post.php" class="btn btn-success">CREATE a POST</a>
  		</div>
  	</div>
  	
  	<div class='col-12 d-flex justify-content-center'>
  		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' class='form-inline my-3 p-3 bg-light'>
  			<input class='form-control' type='text' name='token_link' placeholder='past url here'>
  			<input class='form-control btn-primary ml-1' type='submit' name = 'submit' value = 'SAVE TOKEN'>
  		</form>
  	</div>
  	
  	<div class='col-12 d-flex justify-content-center'>
  		<ul class="list-group">
          <li class="list-group-item"><b>Registered users</b></li>
          <?php
              $vk_users = $vk_user_db->fetch_users();
              foreach ($vk_users as $u){
                  echo "<li class=\"list-group-item\">{$u['name']}</li>";
              }
          ?>
        </ul>
  	</div>
  </div>
</div>

</body>
</html>
