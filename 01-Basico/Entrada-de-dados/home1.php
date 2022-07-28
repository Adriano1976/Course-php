<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculating perimeter and area of the circle</title>
</head>
<body>
<h3>Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.</h3>

<?php

// Getting the value entered by the user.
$raio = $_GET['num'];

// print the radius
echo "Radius: $raio<br />";

// Displays perimeter.
echo "Perimeter: ", 2 * M_PI * $raio, "<br />";

// Displays Area.
echo "Area: ", M_PI * $raio * $raio, "<br />";
?>

</body>
</html>






