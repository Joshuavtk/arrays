<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String to function opdracht</title>
</head>
<body>
<b>output:</b>


<?php

$str = "This is some text. I will be using PHP string functions to change it";
$str_lower = strtolower($str);
$str_ucwords = ucwords($str);
$str_lcfirst = lcfirst($str);
$strtr_arr = array("PHP" => "HTML");
$str_strtr = strtr($str,$strtr_arr);
$str_strrev = strrev($str);
$str_strtoupper = strtoupper($str);
$str_str_shuffle = str_shuffle($str);
$str_str_word_count = str_word_count($str);
$str_strlen = strlen($str);
$str_strcspn = strcspn($str, "PHP");
$str_str_pad = str_pad($str,$str_strlen + 4,"xD");

echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_ucwords . '</p>';
echo '<p>' . $str_lcfirst . '</p>';
echo '<p>' . $str_strtr . '</p>';
echo '<p>' . $str_strrev . '</p>';
echo '<p>' . $str_strtoupper . '</p>';
echo '<p>' . $str_str_shuffle . '</p>';
echo '<h4>The number of words in the string:</h4>';
echo '<p>' . $str_str_word_count . '</p>';
echo '<h4>The number of characters in the string:</h4>';
echo '<p>' . $str_strlen . '</p>';
echo '<h4>The word PHP starts at position:</h4>';
echo '<p>' . $str_strcspn . '</p>';
echo '<h4>String padded to fill the strings length + 4 with the characters xD:</h4>';
echo '<p>' . $str_str_pad . '</p>';
echo '<p>Dit kan je gebruiken om elke string af te sluiten met een html tag</p>'

?>
</body>
</html>
