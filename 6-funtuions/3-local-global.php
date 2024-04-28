<?php 
    // local variable
    function testLocal(){
        $x = 10;
        echo "Local variable of x is: $x. <br>";
    }
    testLocal();

    // global variable
    $y = 20;

    function testGlobal(){
        global $y;
        echo "Global variable of y is: $y. <br>";
    }
    testGlobal();


?>