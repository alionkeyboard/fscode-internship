<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bomb Game</title>
    <style>
        button{
            height: 20px;
            weight: 20px;
        }
        div{
            margin-top: 100px;
            margin-left: 40%;
        }
    </style>
</head>
<body>
    <div>
        <?php for($i=1; $i<101; $i++){ ?>

            <input type="submit" id="<?= $i ?>" name="button" onclick="myFunction(this.id)" value="*" />

            <?php   //görünüş üçün
                if($i % 10==0){
                    echo "<br />";
                }
            ?>

        <?php } ?>
    </div>

<script>
    function myFunction(clicked_id) {
        location.href = "bomb.php?id=" + clicked_id;  //GET ilə id'ni ala bilmək üçün
    }
</script>

</body>
</html>