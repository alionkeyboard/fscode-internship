
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
        
    }
    .col-md-8{
        background:white;
        padding:80px;
        align-items:center;
        border:2px solid black;

    }
    
</style>
</head>
<body style="background:blue;">



   <div class="form">
   <div class="container">
        <div class="row">
            <div class="col-md-8">
               
                <div style="display:none" class="alert"></div>
                <form action="index.php" method="get">
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input id="text" name="text" type="text" class="form-control" value="Ekranda iki input olacaq: biri sadə text, digəri isə textarea. Birinin içində regex pattern, digərinin içində isə text yazmaq olacaq. Submit edəndən sonra php tərəfi patterni yoxlayaq.">
                    </div>
                    <div class="form-group">
                        <label for="pattern">Pattern</label>
                        <textarea id="pattern" name="pattern" type="text" class="form-control"></textarea>
                    </div>
                <button class="btn btn-primary" type="submit">Enter</button>
                </form>
            </div>
        </div>
    </div>
   </div>



   <script>
      $(function () {
        $(".btn").click(function(e){
          e.preventDefault();

          var pattern=$("#pattern").val();
          var text=$("#text").val();
         
          $.ajax({
            type: 'get',
            url: 'controller.php',
            data: {'pattern':pattern,'text':text},
            success: function (data) {
                  $('.alert').css('display','block').addClass('alert-success').text(data).fadeOut(3000);

            }
          });

        });

      });
    </script>
</body>
</html>