<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

  <?php
    function iciceArrayCapEt($a) {
      echo '<blockquote>';

      foreach ($a as $key =>$value) {
        echo "$key: ";
        if (is_array($value)) {
          iciceArrayCapEt($value);
        } else {
          echo $value. '<br />';
        }
      }

      echo '</blockquote>';
    }

    $arr = [
      'C:/'=>[
        'Windows'=>[
          'system',
          'system2'
        ],
        'Users'=>[
          'Ali'=>[
            'Documents',
            'Pictures'
          ],
          'guest'=>[
            'Documents'
          ]
        ]
      ]
          ];
  
      iciceArrayCapEt($arr);

  ?>
</body>
</html>