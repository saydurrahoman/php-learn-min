<?php 
    $infos = array(
        array(1, "Rahim", "Bangla", 80),
        array(2, "Karim", "English", 85),
        array(3, "Abul", "Math", 90),
        array(4, "Babul", "Physics", 95),
        array(5, "Asad", "Chemistry", 93)
    );

    echo '<pre>';
        print_r($infos);
    echo '</pre>';

    echo "<table border = '1'> <tr><th>ID</th><th>Name</th><th>Subject</th><th>Marks</th></tr>";
    for($row = 0; $row < 5; $row++){
        echo "<tr>";
        for($col = 0; $col < 4; $col++){
            echo "<td>";
            echo $infos[$row][$col];
            echo "</td>";
        }
        echo "</tr>";
    };
    echo "</table>";

?>