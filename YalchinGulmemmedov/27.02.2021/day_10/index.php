<?php





?>



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div id="container">
<?php 
   include 'config.php';
        $model=new Model;
 
        $select=Model::$conn->query("SELECT * FROM image");
        $row=$select->fetchAll(PDO::FETCH_CLASS);

        foreach($row as $r){  
            echo "<div class='photo'>";
            echo "<img src='upload/$r->image_url' alt=''>";
            echo "</div>";
    
        }
?>
   
   
   
   
    <div class="next" onClick="next()">></div>
    <div class="prev" onClick="prev()"><</div>
</div>


<script src="main.js"></script>
    
</body>
</html>