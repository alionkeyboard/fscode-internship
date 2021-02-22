<?php
include './controller/ciper.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cesar Ciper</title>
</head>
<body>
    <div id = wrapper>
        <h1>Cesar Ciper</h1>
        <form method="post" action="">
            <input type="number" name="number" id="number" placeholder="number">
            <textarea name="textarea" placeholder="text" rows="4" cols="54"></textarea>
            <button  type="submit" name="submit">Ciper</button>
        </form>
        <span class="help-block" style="color:red"><?php echo $error; ?></span>
        <div>
            <h1><?php foreach($result as $value){echo $value;}?></h1>
        </div>
    </div>
</body>
</html>