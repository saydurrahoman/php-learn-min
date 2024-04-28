<?php 
    // and / &&
    $x = 10;
    $y = 20;
    var_dump($x == 10 and $y == 20);        // true
    var_dump($x == 10 && $y == 25);         // false
    echo "<br>";

    // or / ||
    $x = 10;
    $y = 20;
    var_dump($x == 10 or $y == 25);        // true
    var_dump($x == 15 || $y == 25);         // false
    echo "<br>";

    // xor 
    $x = 10;
    $y = 20;
    var_dump($x == 10 xor $y == 20);        // false
    var_dump($x == 10 xor $y == 25);        // true
    echo "<br>";

    // !
    $x = 10;
    $y = 20;
    var_dump($x != 10);        // false
    var_dump($y != 15);        // true
    echo "<br>";


?>