<?php 
    $color = "blue";

    switch($color){
        case "red":
            echo "Don't try to cross the road";
            break;

        case "yellow":
            echo "Ready to cross the road";
            break;

        case "green":
            echo "Cross the road";
            break;

        default:
            echo "Wait for the traffic signal";
    }

    echo "<br>";



    // another example

    $mark = 60;

    switch(true){
        case ($mark >= 80):
            echo "A+";
            break;
        case ($mark >=70 && $mark <=79):
            echo "A";
            break;
        case ($mark >=60 && $mark <=69):
            echo "B";
            break;
        case ($mark >=50 && $mark <=59):
            echo "C";
            break;
        case ($mark >=40 && $mark <=49):
            echo "D";
            break;
        default:
            echo "Fail";
    }


?>