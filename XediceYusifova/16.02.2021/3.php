<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şahmat</title>
    <style>
        h3{
            font: italic bold 24px Tahoma, sans-serif;
            text-align: center;
            color: #BA9169;
        }
        table{
            border-collapse: collapse;
            border: 1px solid #BA9169;
            margin: auto;
            width: 300px;
            height: 300px;
        }
        td{
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <?php
        /**
         * Ekranda şahmat taxtası çəkən kod yazacaqsız.
         * for, while, foreach istifadə edə bilərsiz.
         * Aşağıdakı nümunəyə baxın.
         * Css də istifadə etmək olar.
         */

        if(!isset($_POST['number'])){
    ?>

    <form name="form" action="" method="post">
        <input type="number" name="number" placeholder="Ədədi daxil edin..." />
    </form>

    <?php }
        else{
            $n = $_POST['number'];
            if($n > 5 && $n < 10){
    ?>

    <h3>Şahmat</h3>
    <table>

    <?php
        for($row=1;$row<=$n;$row++){
            echo "<tr>";

            for($col=1;$col<=$n;$col++){
                $total=$row+$col;

                if($total%2==0){
                    echo "<td bgcolor=#FFDAB9></td>";
                }
                else{
                    echo "<td bgcolor=#BA9169></td>";
                }
            }
            echo "</tr>";
        }
    ?>

    </table>

    <?php
            }
            else{
                echo "<script>alert('Ədəd 5dən böyük 10dən kiçik olmalıdır!')</script>";
            }
        }
    ?>

</body>
</html>