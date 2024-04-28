<?php 
    // 
    $text = "We love our country.";
    echo $text . '<br>';

    $arr = str_split($text);
    $arr1 = str_split($text, 2);

    echo '<pre>';
        print_r($arr1);
    echo '</pre>';

    // 
    echo chunk_split($text, 3, '<br>')


?>