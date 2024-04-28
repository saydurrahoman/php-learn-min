<?php 
    $subjects = array(
        "Bangla" => 80,
        "English" => 84,
        "Math" => 98,
        "Physics" => 96,
        "Chemistry" => 92
    );

    // change value
    // $subjects["Physics"] = 98;

    echo '<pre>';
        print_r($subjects);
    echo '</pre>';

    echo '<ul>';
    foreach($subjects as $key => $subject){
        echo '<li>'. $key . ' - ' . $subject . '<br>' .'</li>';
    }
    echo '</ul>';
?>