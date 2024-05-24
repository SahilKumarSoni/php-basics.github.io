<?php
    $i = 1;
    echo "<table border>";
    echo "<tr><th> Multiplication table </th></tr>";
    do{
        echo "<tr><td>2 x $i = ". 2*$i ."</td></tr>";
        $i++;
    }while($i <= 10 );
    echo "</table>"
?>