<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculando os dias do mês</title>
</head>
<h2>Calculando os dias do mês</h2>

<?php
$mes = $_GET['month'];
$dias = 0;

switch($mes){
    case 1: case 3: case 5:
    case 7: case 8: case 10: case 12:
    $dias = $dias + 1;

    case 4: case 6:
    case 9: case 11:
    $dias = $dias + 2;

    case 2:
        $dias = $dias + 28;
}
echo "<br><b>Mês $mes possui $dias dias.</b><br>";
?>
</html>








