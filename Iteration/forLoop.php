<?php
    echo "<table border>";
    echo "<tr><th> Multiplication table </th></tr>";
    for($i = 1;$i <= 10;$i++){
        echo "<tr><td>2 x $i = " . $i*2 . "</td></tr>";
    }
    echo "</table>"
?>