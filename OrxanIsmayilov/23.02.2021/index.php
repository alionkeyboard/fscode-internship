
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

</head>
<body>

<?php include('connection.php');

$select_image = $conn->prepare("SELECT * FROM images");
$select_image->execute();

?>

   <div class="form">
   <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <div style="display:none" class="alert"></div>
                <form  method="post" action="controller.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control" name="image" value="">
                    </div>
                    <button name="upload" type="submit" class="btn btn-primary">Yukle</button>
                 </form> 
            </div>
            <div class="col-md-7 text-right">
                <?php 
                    foreach($select_image->fetchAll() as $image){?>
                         <p>
                            <?php echo "<b>Url:</b> ".$image['image_url']; ?>  
                           <a class="btn btn-danger" href="controller.php?id=<?php echo $image['id'];?>&delete_image=ok">sil</a>
                         </p>
                    <?php }?>     
            </div>
        </div>
    </div>
   </div>




 
</body>
</html>