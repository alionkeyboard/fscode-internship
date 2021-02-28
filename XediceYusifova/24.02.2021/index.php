<?php

/**
 * Ekranda  email yazmaq üçün input və mesaj yazmaq üçün textarea olacaq.
 * İstifadəçi hər dəfə submit edəndə email və mesajı bir fayla yazacaq.
 * Həmçinin həmin fayldakı bütün mesajları ekranda göstərəcək.
 * Faylın içi təxminən bu formada olacaq:
 */
    if (isset($_POST['send'])) {
        
        if (strlen(trim($_POST['email'])) == 0) {
            $error = "Email boş ola bilməz!";
        }

        elseif (strlen(trim($_POST['textarea'])) == 0) {
            $error = "Mesaj boş ola bilməz!";
        }

        elseif(strlen(trim($_POST['email'])) == 0 && strlen(trim($_POST['textarea'])) == 0){
            $error = "Email və Mesaj boş ola bilməz!";
        }

        else{
            $text = $_POST['email'] . "|" . $_POST['textarea'] . "\n";  // "\n" "<br />" əvəzidir
            $filename = "file.txt";

            if (file_exists($filename)) {   //fayl varsa
                $myfile = fopen($filename, "a");    //fayla əlavə et (a -> add)
            }
            
            else {  //fayl yoxdursa
                $myfile = fopen($filename, "w");    //faylı yarat(yaz) (w -> write)
            }

            fwrite($myfile, $text);
            $myfile = fopen($filename,"r");    //faylı oxu (r -> read)
        ?>

        <div style="margin: 50px;">
            Email | Message <br />

            <?php
                while(! feof($myfile)){
                    echo fgets($myfile) . "<br />";
                }
            ?>
        </div>

        <?php
            fclose($myfile);
        }
    }
    
    if (!isset($_POST['send'])) { ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        .row{
            margin: 5% 20%;
        }
        #send{
            margin-left: 42%;
        }
    </style>
</head>
<body>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger" style="text-align:center;" role="alert">
            <?= $error; ?>
        </div>
    <?php elseif (isset($success)): header("refresh:3;url=login.php"); ?>
        <div class="alert alert-success" style="text-align:center;" role="alert">
            <?= $success; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" require="require" />
            </div>
        </div>
        <div class="form-group row">
            <label for="textarea" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" name ="textarea" id="textarea" rows="3" require="require"></textarea>
            </div>
        </div>
        <input type="submit" name="send" id="send" class="btn btn-primary" value="Göndər" />
    </form>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>