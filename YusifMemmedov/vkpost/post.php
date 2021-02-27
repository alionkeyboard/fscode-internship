<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//vk-ya postlarin gonderilmesi bu sehifede bash verir.
//vk-ya get request gonderib verilmish mesaji post edir
//ve postun id-sini goturub linkini duzeldib "Just posted" linki yaradir ui uchun
include 'db.php';
$vk_user_db = new VKUsersDB(); //optionsda userleri gostermek uchun

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if( isset($_POST['access_token']) && isset($_POST['message']) )
    {
        
        list($token , $vk_id) = explode( '-', $_POST['access_token']);
        $message = urlencode($_POST['message']);
        $url = "https://api.vk.com/method/wall.post?access_token=$token&message=$message&friends_only=0&v=5.57";
        $post_info = file_get_contents($url);
        
        $post_info_json = json_decode($post_info);
        $post_url ="https://vk.com/wall".$vk_id . '_' . $post_info_json->response->post_id;
        
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
  
  <?php 
  if (isset($post_url)){
      ?>
      <div class='col-12 d-flex justify-content-center mt-5'>
		<div class='alert alert-success'>
		<?php echo "<a target=\"_blank\" href=\"$post_url\">Just posted</a>"; ?>
		</div>
	</div>
  <?php 
  }
  ?>
  	
  	<div class='col-12 d-flex justify-content-center'>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' class='bg-light p-5'>
            <textarea class='form-control my-3' name='message' placeholder='message'></textarea>
            <select class='form-control my-3' name="access_token">
            	<?php
                  $vk_users = $vk_user_db->fetch_users();
                  foreach ($vk_users as $u){
                      echo "<option value=\"{$u['token']}-{$u['vk_id']}\">{$u['name']}</option>";
                  }
                ?>
            </select>
            <input class='form-control my-3 btn-primary' type='submit'>
        </form>
  	</div>
  </div>
</div>

</body>
</html>