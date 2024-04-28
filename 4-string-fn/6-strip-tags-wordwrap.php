<?php 

$text = "<h1>We <i>love</i> our <b>country</b>. Best <b>country</b> in the world.</h1>";
echo $text . '<br>';

echo strip_tags($text, '<b>,<i>') . '<br>';

// 
// $str = "I love PHP.";
// echo wordwrap($str, 3, '<br>');

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>");

?>