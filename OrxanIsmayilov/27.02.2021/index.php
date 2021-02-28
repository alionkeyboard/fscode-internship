
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
<style>
body {
  font-family: 'Montserrat', sans-serif;
  color: #333;
  height: 94vh;
  position: relative;
}

h1 {
  text-align: center;
  font-size: 1.5em;
  margin: 30px 0;
  font-weight: 700;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60vh;
}

.slider-wrapper {
  width: 600px;
  height: 300px;
  overflow: hidden;
}

.inner-wrapper {
  width: 500%;
  height: 100%;
  position: relative;
  left: -100%;

}

.slide {
  width: calc(100% / 5);
  height: 100%;
  float: left;
  font-size: 100px;
  color: black;
  display: flex;
  justify-content: center;
  align-items: center;
}

.button {
  width: 30px;
  height: 30px;
  border-top: 2px solid black;
  position: absolute;
  cursor: pointer;
}

.prev {
  border-left: 2px solid black;
  left: 10%;
  transform: rotate(-45deg);
}

.next {
  border-right: 2px solid black;
  right: 10%;
  transform: rotate(45deg);
}

/* YouTube Link */
.youtube-link {
  position: absolute;
  bottom: 0px;
  left: 50%;
  width: 150px;
  margin-left: -90px;
  text-align: center;
  border-bottom: 1px solid #000;
}

</style>
</head>
<body>

<?php include('connection.php');

$select_image = $conn->prepare("SELECT * FROM images");
$select_image->execute();

?>

    <div class="container">
            <div class="slider-wrapper">
                <div class="inner-wrapper">
                    <?php 
                        foreach($select_image->fetchAll() as $image){?>
                            <div class="slide" style="background-image: url('<?php echo $image['image_url']?>')"></div>
                    <?php };?>    
                </div>
             </div>
            <div class="button prev"></div>
            <div class="button next"></div>
        </div>
     </div>

  
       
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
            <div class="col-md-8 text-right">
                <?php 
                    foreach($select_image->fetchAll() as $image){?>
                         <p>
                            <?php echo "<b>Url:</b> ".$image['image_url']; ?>  
                           <a class="btn btn-danger" href="controller.php?id=<?php echo $image['id'];?>&delete_image=ok">sil</a>
                         </p>
                    <?php }?>     
            </div>
           
        </div>
   
  

   


<script>
$(function() {

var inWrap = $('.inner-wrapper');

$('.prev').on('click', function() {

  inWrap.animate({left: '0%'}, 300, function(){

    inWrap.css('left', '-100%');

    $('.slide').first().before($('.slide').last());

  });


});



$('.next').on('click', function() {

  inWrap.animate({left: '-200%'}, 300, function(){

    inWrap.css('left', '-100%');

    $('.slide').last().after($('.slide').first());

  });


});


})

</script>
 
</body>
</html>