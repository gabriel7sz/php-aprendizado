<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>

    <?php 
        /*
            Variáveis são utilizadas para o armazenamento temporário de dados.

            No php existem tipos específicos de variáveis.
            Esses tipos definem o tipo de dado presente na variável. Principais tipos são: 
            strings: cadeia de caracteres; 
            int: armazenam valores numéricos inteiros; 
            float: também armazena valores numéricos positivos e negativos, com frações, ou seja, não inteiros; 
            boolean: armazenam estados, true ou false; 
            array: seria um mapa ordenado de variáveis que relacionam-se através de chaves e valores.

            Regras para a declaração de variáveis:
            Variáveis em php obrigatoriamente necessitam do caractere ( $ ). Esse caractere é quem
            indica para o interpretador php que naquele ponto do script, está sendo intencionalmente  
            declarada uma variável.

            Variáveis em php não podem conter espaços ou caracteres especiais. A única exceção é
            o caractere underline ( _ ). 

            O php não requer e nem suporta a definição explícita de tipos. Ou seja, apesar de possuir
            tipos diferentes de variáveis, não é necessário a indicação do tipo, no momento da declaração.
            Tipagem dinâmica.

            O php é caseSensitive, ou seja, faz distinção entre letras minúsculas e maiúsculas. Exemplo:
            $nome != $Nome != $NOME são exemplos diferentes de variáveis.
        */

        // string
        $nome = 'Gabriel Medeiros';
        //int
        $idade = 21;
        //float
        $peso = 85.5;
        //boolean
        $fumante_sn = false; # true = 1 | false = vazio

        /*
            Outra coisa interessante sobre variáveis é que como o próprio nome já diz, pode-se alterar
            seus valores por outro valores, em qualquer momento do script.

            Podendo até mesmo alterar o TIPO da variável na sua nova atribuição.
            Por exemplo: alterando o valor da variável peso que era float para int:
        */  
        $peso = 90;
    ?>

    <h1>Ficha cadastral</h1>
    <br />
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?php echo $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?php print $fumante_sn ?> </p>

</body>
</html>
