<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<b>output:</b>


<?php

$str = "This it some text. I will be using PHP string functions to change it";
$str_lower = strtolower($str);
$str_ucwords = ucwords($str);




echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_ucwords . '</p>';
echo '<p>' . $str_ucwords . '</p>';
echo '<p>' . $str_ucwords . '</p>';
echo '<p>' . $str_ucwords . '</p>';


?>
</body>
</html>
