<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Curso de PHP</title>
    </head>
    <body>
        <?php
        $nota1 = 9;
        $nota2 = 8.5;
        $nota3 = 8.5;
        $nota4 = 9;
        $total = $nota1 + $nota2 + $nota3 + $nota4;
        $media = $total / 4;
        $media_aprovacao = 6;
        $total_aprovacao = 6 * 4;
        echo "Você obteve nota total de $total sendo necessário $total_aprovacao para sua aprovação. <br />";
        echo "Você obteve uma média final de $media";
        ?>
    </body>
</html>
