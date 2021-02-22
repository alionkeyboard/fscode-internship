    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
.container{
   margin-left: 15px;
}

</style>
    </head>
    <body>
    
<div class="container">
 <form action="#" method="post">
  <div class="mb-3 col-4">
  <label for="adsoyad" class="form-label">Ad Soyad</label>
  <input type="text" name="adsoyad" id="adsoyad" class="form-control"  >
</div>
 <div class="mb-3 col-4">
  <label for="email" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
</div>
<div class="mb-3 col-4">
  <label for="text" class="form-label">Example textarea</label>
  <textarea class="form-control" name="text" id="text" rows="3"></textarea>
</div>
 <button type="submit" class="btn btn-outline-info" name="enter" >Göndər</button>
 </form></div>
    <?php  
if (isset($_POST['enter'])) {
    # code...
$to_email = $_POST['email'];
$adsoyad=$_POST['adsoyad'];
$txt=$_POST['text'];
$subject = "Simple Email Test via PHP";
$body = "$adsoyad,$txt";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";}
    
}
        ?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
    </html>