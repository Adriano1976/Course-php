<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course PHP</title>
</head>
    <body>
        <?php
        $nome = "Eduardo Bona";
        $idade = 31;
        $mensagem = sprintf("O nome do usuário é %s e a idade %s", $nome, $idade);
        ?>
        <p><?=$mensagem?></p>
    </body>
</html>