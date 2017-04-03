<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array oefening 2</title>
</head>
<body>
<h1>Array oefening 2</h1>
<?php

$color = array('white', 'green', 'red', 'blue', 'black');
echo 'The ' . $color[2] . ' carpet, the ' . $color[1] . ' lawn, the ' . $color[0] . ' house, the leaden sky.' . '<br>';

echo $color[1] . '<br>' . $color[2] . '<br>' . $color[0];
echo '<br>';

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $land => $hoofdstad) {
    echo 'The capital of ' . $land . ' is ' . $hoofdstad . '<br>';
}


?>
</body>
</html>