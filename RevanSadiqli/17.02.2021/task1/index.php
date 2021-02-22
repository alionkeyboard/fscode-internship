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
       include "randomnumber.php";
    ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <div class="style1">
        <h2><center>Guess the color</center></h2>
        <h2><center><?php 
        echo "rgb(".$correct1.",".$correct2.",".$correct3.")";?></center></h2>
        <div class="container">
           <div class="row">
           <?php divRand();?><br><br>
           <?php divRand();?>
            <div class="col-md-4">
                 <input type="submit" value="Guess" name="find" >
            </div>
           </div>
        </div>
    </div>
  </form>

</body>
</html>