<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre{
            color: orange;
            background-color: black;
            padding: 15px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php
        function uzunluq($deger){
            $x = 0;
            while(isset($deger[$x])){
                $x++;
            }
            return $x;
        }

        function tersCevir($array){
            $arr = [];
            for($i = uzunluq($array)-1; $i >= 0; $i--){
                
                $arr[] = $array[$i];
            }
            return $arr;
        }

        $array = ['HTML', 'CSS', 'Bootstrap', 'JavaScript', 'React', 'JQuery', 'AngularJS', 'PHP', 'Laravel'];

        echo "<pre>";
        echo "<h2>Arrayin ilk hali</h2>";
        print_r($array);
        echo "<h2>Arrayin ters cevrilmis hali</h2>";
        print_r(tersCevir($array));
        echo "</pre>";

        $array = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];

        echo "<pre>";
        echo "<h2>Arrayin ilk hali</h2>";
        print_r($array);
        echo "<h2>Arrayin ters cevrilmis hali</h2>";
        print_r(tersCevir($array));
        echo "</pre>";
    ?>
</body>
</html>