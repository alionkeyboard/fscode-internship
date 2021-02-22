<?php
include './controller/naturalNumber.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <title>Natural Numbers</title>
</head>

<body>
    <section>
        <div id="maincontainer">
            <div id="table_container">
                <table id="table">
                    <tr>
                        <th>
                            User Input
                        </th>
                        <th>
                            Natural Number < User Input </th>
                        <th>
                            Natural Number > User Input
                        </th>
                    </tr>
                    <tr>
                        <td><?php echo $input ?></td>
                        <td><?php echo $floor . "(" . $fraction_1 . ")" ?></td>
                        <td><?php echo $ceil . "(" . $fraction_2 . ")" ?></td>
                    </tr>
                </table>
            </div>
            <div id="form">
                <form method="post">
                    <label for="number">Enter a decimal number:</label><br>
                    <input type="text" id="number" name="number">
                    <button type="submit" id="button" name="button">Submit</button>
                    <span class="help-block"><?php echo $error; ?></span>
                </form>
                
            </div>

        </div>
    </section>
</body>

</html>