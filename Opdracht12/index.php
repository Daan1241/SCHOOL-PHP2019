<?php
function nl()
{
    echo '<br>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 12</title>
</head>
<body>
<form method="GET">
    <h2>Registreer je vandaag nog:</h2><br><br>
    Gebruikersnaam: <br><input type="text" name="gebruikersnaam"><br>
    <br>
    Email: <br><input type="text" name="email"><br>
    <br>
    Wachtwoord: <br><input type="password" name="wachtwoord"><br><br>
    <input type="submit">
</form>
<br><br><br>


<?php
$uname = $_GET['gebruikersnaam'];
$email = $_GET['email'];
$pword = $_GET['wachtwoord'];


if ($uname != "" || $email != "" || $pword != "") {
    echo "Gebruikersnaam: " . $uname;
    echo "<br>";
    echo "E-mail: " . $email;
    echo "<br>";
    echo "Wachtwoord: " . $pword;

} else {
    echo "Vul alle velden in";
}
?>
</body>
</html>
