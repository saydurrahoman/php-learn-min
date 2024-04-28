<?php 
    $text = "I love HTML.";
    echo $text . '<br>';

    // str_replace() - case-sensitive
    echo str_replace("HTML", "PHP", $text) . '<br>';

    // str_replace() - case-insensitive
    echo str_ireplace("html", "php", $text) . '<br>';

    // 
    $colors = ["red", 'green', 'blue'];

    echo '<pre>';
    print_r($colors);
    echo '</pre>';

    echo '<pre>';
        print_r(str_replace('red', 'yellow', $colors));
    echo '</pre>';

    // 
    $text_1 = "We love our country. Hello country. Hi country.";
    echo $text_1 . '<br>';
    echo substr_replace($text_1, 'city', 12, -1) . '<br>';

    // 
    echo strtr($text_1, 'c', 'C');


?>