<?php
$categoria = $_GET["id"];
switch($categoria){
    case 'tv':
        echo "Destaques: LG, TLC, Philco";
        break;
    case 'fogao':
        echo "Destaques: Arno, Dako";
        break;
    case 'chuveiro':
        echo "Destaques: Lorenzetti, Bella Ducha";
        break;
    default:
        echo "Categoria não encontrada";
        break;
}
?>

