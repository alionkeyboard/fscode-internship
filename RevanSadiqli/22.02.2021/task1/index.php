<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="az" lang="az" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
 </head>
<body>

    <?php
    include "regexchecker.php";
    ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="style1">
        <h2><center>Regex </center></h2>
        <div class="container">
           <div class="row">
            <div class="col-md-12">
                 <input type="text" placeholder="Regexi daxil edin"  name="regex" required>
            </div>
            <div class="col-md-12">
                 <textarea name="test" placeholder="Mətin" rows="7" cols="85" required>
               
                 </textarea>
            </div><br>
            <div class="col-md-12">
                 <button type="submit"  name="check" class="submit" >
                   CHECK
                 </button>
            </div>
           </div>
        </div>
    </div>
  </form>   
      
    <?php
    callSubmit();
    ?>

</body>
</html>