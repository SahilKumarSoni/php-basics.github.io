<?php
    $n = 1;
    $a = 10;
    $b = 20;
    if($n == 1){
        $sum = $a + $b;
        echo "Addition is $sum";
    } else if($n == 2){
        $sub = $a - $b;
        echo "Subtraction is $sub";
    } else if($n == 3){
        $mul = $a * $b;
        echo "Multiplication is $mul";
    } else if($n == 4){
        $div = $a / $b;
        echo "Division is $div";
    } else if($n == 5){
        $num = 10;
        if($num%2 == 0){
            echo "Number is Even";
        } else {
            echo "Number is Odd";
        }
    } else if($n == 6){
        echo "Wrong input!!";
    }
?>