<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>

    <?php 
        /*
            Concatenar nada mais é, que a capacidade de conectar strings e variáveis em uma mesma
            cadeia de caracteres, formando assim um texto dinâmico.

            É um recurso muito simples, que será muito utilizado durante o dia a dia.

            Para concatenar no php é utilizado o operador ponto ( . ) .

            Para fazer a concatenação, basta isolar conjuntos de caracteres com aspas simples ou duplas,
            utilizar o operador ponto ( . ) e em seguida o nome da variável.

            É possível também utilizar aspas duplas ( "" ) para fazer a concatenação em cadeias de caracteres.
            Muito semelhante ao template string que utiliza-se no JS, porém sem a necessidade de referenciar
            a variável de uma forma diferente, basta começar com o sinal de dolar ( $ ) em seguida o nome da variável.
        */ 

        $nome = 'Rafael';
        $corPreferida = 'vermelho';
        $idade = 12;
        $hobby = 'jogar Elden Ring';

        echo 'Olá ' . $nome . ', sua cor preferida é ' . $corPreferida .', você possui ' 
        . $idade . ' anos e gosta de ' . $hobby . '.';

        echo '<br />';

        echo "Ola $nome, sua cor preferida é $corPreferida, 
        você possui $idade anos e gosta de $hobby.";
    ?>
    
</body>
</html>
