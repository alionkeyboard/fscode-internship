<?php
include './controller/getWeather.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <title>Weather Forecast</title>
</head>

<body>
    <header>
        <div class="heading">
            <h1 id="title">15 Gunluk Hava Proqnozu,Bakı Həftəlik Hava Vəziyyəti</h1>
        </div>
    </header>
    <div>
        <table description="weather" id="table">
            <thead>
                <tr class="tablerow" scope="row">
                    <?php foreach ($dataTableHeader as $tableHeader) : ?>
                        <th scope="tablehead" class="tablehead"><?php echo $tableHeader ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataTableDetail as $tableDetail) : ?>
                    <tr scope="row">
                        <?php foreach ($tableDetail as $key => $value) : ?>
                            <td><?php echo $value ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>