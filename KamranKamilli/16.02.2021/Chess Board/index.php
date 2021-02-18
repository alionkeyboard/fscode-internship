<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Chess Board</title>
</head>

<body>
<?php
    echo "<table class = chessboard border=1px>";
        $length = 8; // length of the board
        $letters = [" ","a", "b", "c", "d", "e", "f","g","h"];
        for ($row = 0; $row < $length; $row++) {
            echo "<tr>";
            $numbers = $length - $row;
            echo "<td class = sides>$numbers</td>";
            for ($col = 0; $col < $length; $col++) {
                
                $result = $row + $col;
                //if odd cell then black, if even cell then white
                if ($result % 2 != 0) {
                    echo "<td class = cells id=blackcell ></td>";
                } else {
                    echo "<td class = cells id = whitecell ></td>";
                }
                
            }
            
            echo "</tr>";  
        
        }
        //printing letters on the bottom of the board
        for($i = 0; $i<=$length; $i++)
        {
            echo "<td class = sides>$letters[$i]</td>";
        }
    echo "</table>";
    ?>
</body>

</html>