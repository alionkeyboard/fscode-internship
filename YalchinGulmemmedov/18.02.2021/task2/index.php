<?php
include 'simple_html_dom.php';
$url="https://www.havaproqnozu.com/baki-15-gunluk-hava-veziyyeti-taxmini.html";

$connect=str_get_html(file_get_contents($url));

$result_1=$connect->find("td",0);
$result_2=$connect->find("td",1);
$result_3=$connect->find("td",2);
$result_4=$connect->find("td",3);
$result_5=$connect->find("td",4);
$result_6=$connect->find("td",5);
$result_7=$connect->find("td",6);
$result_8=$connect->find("td",7);
$result_9=$connect->find("td",8);
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
<table id="customers" >
    <tr>
        <th> Tarix</th>
        <th>Hava Veziyyeti</th>
        <th>En Asagi<br>(Gece)</th>
        <th>En Yuksek<br>(Gunduz)</th>
        <th>Hiss Istilik</th>
        <th>Nem Orani</th>
        <th>Kulek</th>
        <th>Gunun cixmasi</th>
        <th>Qurub</th>
    </tr>
    <tr>
    
    <?php echo $result_1;?>
    <?php echo $result_2_img.$result_2;?>
    <?php echo $result_3;?>
    <?php echo $result_4;?>
    <?php echo $result_5;?>
    <?php echo $result_6;?>
    <?php echo $result_7;?>
    <?php echo $result_8;?>
    <?php echo $result_9;?>
    </tr>

</table>
</body>
</html>