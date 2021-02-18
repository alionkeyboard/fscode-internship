<style type="text/css">


    table.chess {
        padding: 0;
        margin: 0;
    }
    table.chess td {
        width: 25px;
        height:25px;
        padding: 0;
        margin: 0;
        text-align: center;
    }
    table.chess td.odd {
        background: #DEB887;
    }
    table.chess td.even {
        background: #D2691E;
    }
    table.chess td.top {
        border-top: 1px solid;
    }
    table.chess td.bottom {
        border-bottom: 1px solid;
    }
    table.chess td.left {
        border-left: 1px solid;
    }
    table.chess td.right {
        border-right: 1px solid;
    }
   
</style>

<?php

$gridSize = 8;

echo "<table class='chess' cellpadding='0' cellspacing='0'>";
    for($i = $gridSize; $i >= 0; $i--) {
        echo "<tr>";
        for($j = 0; $j <= $gridSize; $j++) {
            $classes = [];
            $classes[] = ($j+$i) % 2 ? 'odd' : 'even';

            if ($i === $gridSize) {
                $classes[] = 'top';
            }

            if ($i === 1) {
                $classes[] = 'bottom';
            }

            if ($j === 1) {
                $classes[] = 'left';
            }

            if ($j === $gridSize) {
                $classes[] = 'right';
            }

            if ($j === 0 && $i !== 0) {
                echo "<td>$i</td>";
            } elseif ($i === 0 && $j !== 0) {
                echo "<td>" . chr(65+$j-1) . "</td>";
            } elseif ($i === 0 && $j === 0) {
                echo "<td></td>";
            } else {
                echo "<td class='" . implode(' ', $classes) . "'></td>";
            }
        }
    echo "</tr>";
}
echo "</table>";