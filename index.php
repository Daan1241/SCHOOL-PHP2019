<?php
/**
 * Created by PhpStorm.
 * User: daank
 * Date: 18-6-2019
 * Time: 12:10
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdracht 1</title>
</head>
<body>
<?php
//for ($i = 1; $i <= 3; $i++) {
//    echo "<img src='img/afb".$i.".jpg'>";
//}

$apen = array("afb1.jpg", "afb2.jpg", "afb3.jpg");

foreach ($apen as $aap){
        echo "<img src='img/".$aap."'>'";


}
?>
</body>
</html>
