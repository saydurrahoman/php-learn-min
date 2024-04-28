<?php 
    // explode()
    $text = "I am learning PHP.";
    echo $text . '<br>';

    $explode = explode(' ', $text);

    echo '<pre>';
    print_r($explode);
    echo '</pre>';

    // implode()
    $colors = array("Red", 'Green', 'Blue', 'Orange');

    $implode = implode(',', $colors);
    echo '<pre>';
    print_r($implode);
    echo '</pre>';


?>