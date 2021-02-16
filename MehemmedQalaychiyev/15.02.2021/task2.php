<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: white;
            font-size: 20px;
            letter-spacing: 2px;
        }
        .error{
            background-color: red;
            padding: 10px;
        }
        .success{
            padding: 10px;
            background-color: green;
        }
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

        function tap($arr, $soz){
            $x = 0;
            $cavab = 0;
            while(isset($arr[$x])){
                if($arr[$x] === $soz){
                    $cavab = 1;
                }
                $x++;
            }
            return $cavab;
        }

        $sozler = ['kitab', 'defTer', 'tebiet', 'Mekteb', 'AGAC', 'qeleM'];

        echo "<pre>";
        print_r($sozler);
        echo "</pre>";

        echo (tap($sozler, 'kitab')) ? "<p class='success'>'kitab' sozler arrayinde movcuddur.</p>" : "<p class='error'>'kitab' sozler arrayinda movcud deyil!</p>";
        echo (tap($sozler, 'masin')) ? "<p class='success'>'masin' sozler arrayinde movcuddur.</p>" : "<p class='error'>'masin' sozler arrayinda movcud deyil!</p>";
        echo (tap($sozler, 'defter')) ? "<p class='success'>'defter' sozler arrayinde movcuddur.</p>" : "<p class='error'>'defter' sozler arrayinda movcud deyil!</p>";
        echo (tap($sozler, 'defTer')) ? "<p class='success'>'defTer' sozler arrayinde movcuddur.</p>" : "<p class='error'>'defTer' sozler arrayinda movcud deyil!</p>";
        echo (tap($sozler, 'AGAC')) ? "<p class='success'>'AGAC' sozler arrayinde movcuddur.</p>" : "<p class='error'>'AGAC' sozler arrayinda movcud deyil!</p>";
        echo (tap($sozler, 'ilan')) ? "<p class='success'>'ilan' sozler arrayinde movcuddur.</p>" : "<p class='error'>'ilan' sozler arrayinda movcud deyil!</p>";
    
    ?>
</body>
</html>