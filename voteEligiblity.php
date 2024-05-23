<?php
    $num = 40;
    if($num > 0 && $num<=105){
        if($num >= 18){
            echo "Eligible for vote";
        } else {
            echo "Not eligible for vote";
        }
    } else {
        echo "Invalid AGE!!";
    }
?>