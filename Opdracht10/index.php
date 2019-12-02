<?php
function nl(){
    echo '<br>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 10</title>
</head>
<body>
<form method="GET">
    <input type="text" name="tekstvak">

</form>
<?php
$leeftijd = $_GET["tekstvak"];

$prijs = 10;
$calprijs = NULL;

if($leeftijd >= 65){
    $calprijs = $prijs/2;

} else if($leeftijd <= 12 && $leeftijd >= 4){
    $calprijs = $prijs/2;
} else if($leeftijd <= 3){
    $calprijs = 0;
} else{
    $calprijs = $prijs;
}

echo $leeftijd;
nl();
echo "De prijs is: ".$calprijs;
?>
</body>
</html>
