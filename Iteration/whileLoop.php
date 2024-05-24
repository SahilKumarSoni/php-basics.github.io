<?php
    $i = 1;
    echo "<table border>";
    echo "<tr><th> Multiplication table </th></tr>";
    while($i <= 10 ){
        echo "<tr><td>2 x $i = ". 2*$i ."</td></tr>";
        $i++;
    }
    echo "</table>"
?>