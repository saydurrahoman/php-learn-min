<?php
    $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
    echo html_entity_decode($str) . '<br>';

    $str1 = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
    echo htmlentities($str1) . '<br>';

    $str2 = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
    echo htmlspecialchars_decode($str2) . '<br>';

    $str3 = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str3);
?>