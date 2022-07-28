<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Curso PHP Progressivo</title>
    </head>
    <body>
        <?php
        $texto = 'Curso PHP Progressivo';
        echo "O melhor curso é '$texto'.<br/>";

        $idade = 18;
        $melhor_numero = 2112;
        echo "Eu tenho $idade de idade e meu número favorito é $melhor_numero.<br>";

        $dado = 'Joao';
        echo "Meu nome é $dado ";
        $dado = 20;
        echo "e tenho $dado anos de idade.<br/>";

        $numero1 = 12.50;
        $numero2 = "12";
        $numero3 = 2.00;
        $resultado = $numero1 + $numero2 * $numero3;
        echo "1º Resultado: $resultado<br/>";

        $numero1 = 10;
        $numero2 = $numero1;
        $numero3 = &$numero1;
        $numero3++;
        $resultado = $numero1 + $numero2 + $numero3;
        echo "2º Resultado: $resultado<br/>";

        const VERSAO_APLICACAO = "1.10";
        const MOSTRAR_ERROS = "1";
        echo VERSAO_APLICACAO;
        echo " ";
        echo MOSTRAR_ERROS;
        ?>
    </body>
</html>
