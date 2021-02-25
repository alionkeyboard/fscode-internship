<?php
include './controller/blog.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booknetic Blog</title>
    <style>

    </style>
</head>

<body>
    <div>
        <ol>
            <?php foreach ($arr as $key => $value) : ?>
                <?php foreach ($value as $subkey => $subvalue) : ?>
                    <li>
                        <?php if (is_array($subvalue)) { ?>
                            <?php foreach ($subvalue as $subsubkey => $subsubvalue) : ?>
                                <?php switch ($subsubkey) {
                                    case 'image':
                                        echo "<img style = 'max-width: 600px; max-height:400px;'  src=" . $subsubvalue . " alt=''>";
                                        break;
                                    case 'date':
                                        echo "<p>" . $subsubvalue . "</p>";
                                        break;
                                    case 'title':
                                        echo "<h2>" . $subsubvalue . "</h2>";
                                        break;
                                    case 'description':
                                        echo "<p>" . $subsubvalue . "</p>";
                                        break;
                                    case 'url':
                                        echo "<a style= 'font-size:20px;' href=" . $subsubvalue . ">Visit</a>";
                                        break;
                                    default:
                                        echo "ERROR! Something went wrong";
                                } ?>
                            <?php endforeach; ?>
                        <?php } ?>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ol>
    </div>
</body>

</html>