<?php 
    // x = y
    $x = 10;
    $y = $x;
    echo $y . "<br>";

    // x += y
    $x = 10;
    $y = 20;
    $x += $y;   // $x = $x + $y
    echo $x . "<br>";

    // x -= y
    $x = 30;
    $y = 10;
    $x -= $y;   // $x = $x - $y
    echo $x . "<br>";

    // x *= y
    $x = 7;
    $y = 5;
    $x *= $y;   // $x = $x * $y
    echo $x . "<br>";

    // x /= y
    $x = 13;
    $y = 3;
    $x /= $y;   // $x = $x / $y
    echo $x . "<br>";
    echo round($x , 2) . "<br>";

    // x %= y
    $x = 17;
    $y = 4;
    $x %= $y;   // $x = $x % $y
    echo $x . "<br>";

?>