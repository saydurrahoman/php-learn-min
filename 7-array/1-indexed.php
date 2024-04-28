<?php 

    $subjects = array("Bangla", "English", "Math", "Physics", "Chemistry");

    echo '<pre>';
        print_r($subjects);
    echo '</pre>';

    echo $subjects[3] . '<br>';

    for($i = 0; $i <= 4; $i++){
        echo $i+1 . ') ' . $subjects[$i] . '<br>';
    }


?>