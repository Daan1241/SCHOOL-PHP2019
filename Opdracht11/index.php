<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 11</title>
</head>
<body>
<?php
/*
$spartelkuikens = 25;
$waterbuffels = 32;
$plons = 11;
$bommetje = 23;

$oploopwaarde = 1;

$clubs = array($spartelkuikens, $waterbuffels, $plons, $bommetje);
*/

$zwemclubs = array(
    'Spartelkuikens' => 25,
    'Waterbuffels' => 32,
    'plons' => 11,
    'bommetje' => 23
);

foreach ($zwemclubs as $output) {
    echo "Totaal aantal zwemmers: ".$output;
    for($i = 1; $i <= floor($output / 5); $i++) {

        echo "<img src='../afbeelding2.png' style='width: 100px;'>";
    }

    echo "<br><br>";
}





?>
</body>
</html>
