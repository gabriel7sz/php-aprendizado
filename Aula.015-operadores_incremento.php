<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Encremento</title>
</head>
<body>

    <?php 

        /*
            Operadores de incremento e decremento são operadores que permitem adicionar ou remover uma unidade
            de um valor numérico.

            Tipos de operadores que o PHP disponiliza:

            Pré-Incremento ( ++$a ) Adiciona uma unidade antes de retornar $a.
            Pós-Incremento ( $a++ ) Retorna $a e depois adiciona uma unidade.
            Pré-Decremento ( --$a ) Diminui uma unidade antes de retornar $a.
            Pós-Decremento ( $a-- ) Retorna $a e depois dominui uma unidade.
            
        */ 
            
            
    ?>
    <h3>Pós-Incremento</h3>
    <?php 
        $a = 7;
        echo "O valor contido em a é: $a <br />";
        echo 'O valor contido em a após o incremento é: ' . $a++ . ' <br />';
        echo "Como o valor é obtido APÓS a instrução, segue o valor atualizado: $a  <br />";
    ?>

    <h3>Pré-Incremento</h3>
    <?php 
        $b = 10;
        echo "O valor contido em b é: $b <br />";
        echo 'O valor contido em b com o pré-incremento é:' . ++$b . '<br />';
    ?>

    <h3>Pós-Decremento</h3>
    <?php 
        $c = 2; 
        echo "O valor contido em c é: $c <br />";
        echo 'O valor contido em c com pós-decremento é: ' . $c-- . '<br />';
        echo "Como o valor é obtido APÓS a instrução, segue o valor atualizado: $c"
    ?>

    <h3>Pré-Decremento</h3>
    <?php
        $d = 4;
        echo "O valor contido em d é: $c <br />";
        echo 'O valor contido em d com pré-incremento é: '. --$c . '<br />';
    ?>
</body>
</html>