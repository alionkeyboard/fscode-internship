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
        function kes($text, $a, $b){
            $x = 0;
            $str = "";
            while(isset($text[$x])){
                if($x === $b){
                    break;
                }
                if($x >= $a){
                    $str .= $text[$x];
                }
                $x++;
            }
            return $str;
        }
        function uzunluq($text){
            $x = 0;
            while(isset($text[$x])){
                $x++;
            }
            return $x;
        }
        function say($text, $simvol){
            $x = 0;
            for($i = 0; $i < uzunluq($text); $i++){
                if($text[$i] === $simvol){
                    $x++;
                }
            }
            return $x;
        }
        function ayir($text, $simvol){
            $arr = [];
            $sayac = 0;
            if($simvol === ""){
                for($i = 0; $i < uzunluq($text); $i++){
                    $arr[] = $text[$i];
                }
            }
            else{
                $y = 0;
                for($i = 0; $i < uzunluq($text); $i++){
                    if($y === say($text, $simvol)){
                        $arr[] = kes($text, $sayac, uzunluq($text));
                        break;
                    }
                    if($text[$i] === $simvol){
                        $arr[] = kes($text, $sayac, $i);
                        $sayac = $i+1;
                        $y++;
                    }
                }
            }
            return $arr;
        }

        echo "<pre>";
        echo "<h3>'15.02.2021' , '.'</h3>";
        print_r(ayir("15.02.2021", "."));
        echo "</pre>";

        echo "<pre>";
        echo "<h3>'Bu cumle 5 hisseye ayrilacaq.' , ' '</h3>";
        print_r(ayir("Bu cumle 5 hisseye ayrilacaq.", " "));
        echo "</pre>";

        echo "<pre>";
        echo "<h3>'3+5+6+7+' , '+'</h3>";
        print_r(ayir("3+5+6+7+", "+"));
        echo "</pre>";

        echo "<pre>";
        echo "<h3>'Mehemmed,Qalayciyev,1997,ADIU' , ','</h3>";
        print_r(ayir("Mehemmed,Qalayciyev,1997,ADIU", ","));
        echo "</pre>";

        echo "<pre>";
        echo "<h3>'Azerbaycan' , ''</h3>";
        print_r(ayir("Azerbaycan", ""));
        echo "</pre>";

    ?>
</body>
</html>