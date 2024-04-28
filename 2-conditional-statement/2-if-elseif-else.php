<?php 
    $mark = 85;

    if($mark >= 80){
        echo "A+";
    } elseif($mark <= 79 && $mark >= 70){
        echo "A";
    } elseif($mark <= 69 && $mark >= 60){
        echo "B";
    } elseif($mark <= 59 && $mark >= 50){
        echo "C";
    } elseif($mark <= 49 && $mark >= 40){
        echo "D";
    } else{
        echo "Fail!";
    }


?>