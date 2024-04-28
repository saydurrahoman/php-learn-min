<?php 

    function myFunction($name, $city){
        echo "Hi, I'm $name. I'm from $city. <br>";
    }
    myFunction("Sajib", "Dhaka");

    function sum($x, $y, $z = 0){
        echo "Total: " . $x+$y+$z . '<br>';
    }
    sum(2, 5, 7);
    sum(3, 7);

?>