<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table td, table th{
            border: 2px solid silver;
            font-size: 20px;
            padding: 5px;
        }
        table {
            border-collapse: collapse;
            width: 500px;
        }
    </style>
</head>
<body>
    <?php
        $sagirdler = [
                        ['ad' => 'Nermin Eliyeva', 'yas' => '12', 'cins' => 'q'],
                        ['ad' => 'Kamil Rahimli', 'yas' => '13', 'cins' => 'k'],
                        ['ad' => 'Zaur Qurbaneliyev', 'yas' => '12', 'cins' => 'k'],
                        ['ad' => 'Melahet Isgenderli', 'yas' => '12', 'cins' => 'q'],
                        ['ad' => 'Ali Rzayev', 'yas' => '11', 'cins' => 'k'],
                        ['ad' => 'Ramin Orucov', 'yas' => '10', 'cins' => 'k'],
                        ['ad' => 'Veli Kerimli', 'yas' => '13', 'cins' => 'k'],
                        ['ad' => 'Zamiq Aliyev', 'yas' => '14', 'cins' => 'k'],
                        ['ad' => 'Esmaye Mustafayeva', 'yas' => '12', 'cins' => 'q'],
                        ['ad' => 'Veli Kerimli', 'yas' => '15', 'cins' => 'k'],
                    ];
        
        function axtar($array, $axtaris){
            $say = 0;
            if($axtaris === "k"){
                foreach ($array as $k => $v) {
                    if($v['cins'] === "k"){
                        $say += 1;
                    }

                }
            }
            elseif($axtaris === "q"){
                foreach ($array as $k => $v) {
                    if($v['cins'] === "q"){
                        $say += 1;
                    }
                }
            }
            return $say;
        }
        function average($array){
            $say = 0;
            $ortalama = 0;
            foreach ($array as $key => $value) {
                $ortalama += $value['yas'];
                $say++;
            }
            $ortalama = $ortalama/$say;
            return $ortalama;
        }

        function minYas($array){
            $say = 0;
            foreach ($array as $key => $value) {
                if($say === 0){
                    $say = $value['yas'];
                }
                elseif($value['yas'] < $say){
                    $say = $value['yas'];
                }
            }
            $ad = "";
            foreach ($array as $key => $value) {
                if($value['yas'] === $say){
                    $ad = $value['ad'];
                }
            }
            return $ad;
        }
        function maxYas($array){
            $say = 0;
            foreach ($array as $key => $value) {
                if($say === 0){
                    $say = $value['yas'];
                }
                elseif($value['yas'] > $say){
                    $say = $value['yas'];
                }
            }
            $ad = "";
            foreach ($array as $key => $value) {
                if($value['yas'] === $say){
                    $ad = $value['ad'];
                }
            }
            return $ad;
        }
        function say($array){
            $say = 0;
            foreach ($array as $key => $value) {
                $say++;
            }
            return $say;
        }
        echo "<table><thead>";
        echo "<tr><th>Ad, Soyad</th> <th>Yash</th> <th>Cins</th></tr>";
        echo "</thead>";
        
        foreach ($sagirdler as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value['ad'] . "</td> <td>" . $value['yas'] . "</td> <td>" . $value['cins'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table><br>";

        echo "Sinifdəki qızların sayı = " . axtar($sagirdler, "q");
        echo '<br>';
        echo "Sinifdəki oğlanların sayı = " . axtar($sagirdler, "k");

        echo '<br>';
        echo "Sinifdəki uşaqların ümumi yaş ortalaması = " . average($sagirdler);

        echo '<br>';
        echo "Sinifdə ən kiçik uşağın adı, soyadı = " . minYas($sagirdler);

        echo '<br>';
        echo "Sinifdə ən böyük uşağın adı, soyadı  = " . maxYas($sagirdler);

        echo '<br>';
        echo "Sinifdəki uşaqların ümumi sayı = " . say($sagirdler);
    
    ?>
</body>
</html>