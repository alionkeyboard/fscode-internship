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
    .form{
        display:flex;
        padding:200px;
       margin:auto;
    }
    .row{
        justify-content:center;
        align-items:center;
    }
    .col-md-8{
        background:white;
        padding:80px;
        align-items:center;
        border:2px solid black;

    }
    .form-group button{
        border-radius:80%;
        width:50px;
        height:50px;
        margin:30px;
        
    }
</style>
</head>
<body style="background:blue;">

<?php include('colors.php');?>


   <div class="form">
   <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5 class="text-center">Guess The Color !</h5>
                <p class="text-center"><?php echo $_SESSION['color']; ?></p>
                <div style="display:none" class="alert"></div>
                <form>
                    <div class="form-group text-center">
                        <?php foreach($colors as $k=>$v){?>
                            <button style="background-color:<?php echo $v; ?>" value="<?php echo $k; ?>" name="color" type="submit" class="btn btn-primary"></button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div>



   <script>
      $(function () {
        $(".btn").click(function(e){
          e.preventDefault();
          var color=$(this).val();
          
          $.ajax({
            type: 'get',
            url: 'controller.php',
            data: {'color':color},
            success: function (data) {
                if(data =='success')
                {
                  $('.alert').css('display','block').addClass('alert-success').text('Tebrikler secdiyiniz reng dogrudur !').fadeOut(3000);
                  
                  setTimeout(function(){
                     window.location.reload();
                  }, 2000);
                }
                else
                {
                    $('.alert').css('display','block').addClass('alert-danger').text('Teessufler secdiyiniz reng yalnisdir !!!').fadeOut(3000);
                   
                    setTimeout(function(){
                        window.location.reload();
                     }, 2000);
                }

            }
          });

        });

      });
    </script>
</body>
</html>