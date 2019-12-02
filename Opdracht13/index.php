<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 13</title>
</head>
<body>
<form method="GET" action="index.php">
    <input type="text" name="temperatuur">
    <input type="submit">
</form>

<?php
//if(isset($_GET['temperatuur'])){
//$uname = $_GET['gebruikersnaam'];
//print_r($uname."test");

echo $_GET['temperatuur'];


?>
</body>
</html>
