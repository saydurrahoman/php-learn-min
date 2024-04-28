<?php 
    // 
    $text = "We love our country.";
    echo $text . '<br>';
    echo strlen($text) . "<br>";

    // 
    echo str_word_count($text) . "<br>";

    echo '<pre>';
    print_r(str_word_count($text, 1));
    echo '</pre>';

    echo '<pre>';
    print_r(str_word_count($text, 2));
    echo '</pre>';

    // 
    $text_1 = "We love our country. Hello country. Hi country.";
    echo $text_1 . '<br>';
    echo substr_count($text_1, 'country') . "<br>";

    echo substr_count($text_1, 'o') . "<br>";



?>