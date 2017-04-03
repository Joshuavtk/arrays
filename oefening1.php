<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<h1>Oefening 1 Arrays</h1><br>

<?php

/*$teachers = array('ingrid', 'jelle', 'joey');

//echo $teachers[1];

$teachers[1] = 'ed';

$teachers[] = 'theo';

//var_dump($teachers);

//print_r($teachers);

/*for ($i = 0; $i < 3; $i++) {

    echo $teachers[$i];
    echo '<br>';
}

array_push($teachers, 'hugo', 'paul');

foreach ($teachers as $oke) {
    echo $oke . '<br>';
}

$subjects = array('ingrid' => 'bap' , 'joey' => 'pro' , 'theo' => 'fro');

foreach ($subjects as $oke2 => $subject) {
    echo $oke2 . ' teaches ' . $subject . '<br>';
}

//echo $subjects['ingrid'];
*/

$numbers = array(2, 4, 6, 1, 3, 5);

foreach ($numbers as $numbers_print) {
    echo $numbers_print . '<br>';
}

echo '<br>';
$numbers[5] = 8;

foreach ($numbers as $numbers_print) {
    echo $numbers_print . '<br>';
}

array_push($numbers, 7, 9);

echo '<br>';
foreach ($numbers as $numbers_print) {
    echo $numbers_print . '<br>';
}

$mixed = array(4, 'januari', 'februari', 12, 'maart', 11, 'april');

echo '<br>';
foreach ($mixed as $mixed_print) {
    echo $mixed_print . '<br>';
}

$mixed[0] = 'fietspomp';
$mixed[1] = 'ventiel';
$mixed[2] = 'lucht';
array_push($mixed, 'mei', 'juni', 8);

echo '<br>';
foreach ($mixed as $mixed_print) {
    echo $mixed_print . '<br>';
}

$subject = array('PHP' => 'Ingrid', 'JavaScript' => 'Ed', 'Engels' => 'Paul');

echo '<br>';
echo $subject['PHP'];
echo '<br>';
echo $subject['JavaScript'];



?>

</body>
</html>
