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
        $array = [
            'C:/' => [
                'Windows' => [
                    'system',
                    'system32'
                ],
                'Users' => [
                    'Ali' => [
                        'Documents',
                        'Pictures'
                    ],
                    'guest' => [
                        'Documents'
                    ]
                ]
            ]
                ];

        // echo "<pre>";
        // print_r(($array));
        // echo "</pre>";
        function yazdir($array, $say){
            $say++;
            foreach ($array as $key => $value) {
                
                if(gettype($key) === 'string'){
                    if($key !== "C:/"){
                        for($i=1; $i<$say; $i++){
                            echo "\t";
                        }
                    }
                    echo $key;
                    echo "<br>";
                }
                
                if(gettype($value) === 'array'){
                    yazdir($value, $say);
                }

                if(gettype($value) === 'string'){
                    for($i=1; $i<$say; $i++){
                        echo "\t";
                    }
                    echo $value;
                    echo "<br>";
                }                
            }
            
        }

        
        echo "<pre>";
        yazdir($array, 0);
        echo "</pre>";
    
    ?>
</body>
</html>