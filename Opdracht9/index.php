<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 9</title>
</head>
<body>
<center>
<?php
$break = 1;
for ($i = 1; $i <= 10; $i++) {

    if ($break <= 5) {
        if ($i & 1) {
            echo "<img src='../afbeelding1.png' style='border: 5px solid red'>";
        } else {
            echo "<img src='../afbeelding1.png' style='border: 5px solid green'>";
        }
    } else{
        echo "<br>";
        $break = 0;
    }
    $break++;
}

?>
</center>
</body>
</html>
