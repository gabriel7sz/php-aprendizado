<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECHO | PRINT</title>
</head>
<body>
    
    <!-- 
        Os dois comandos em questão possuem um ojetivo muito claro. Que é a IMPRESSÃO de 
        conteúdos advindos do bloco de código do PHP, dentro do arquivo HTML que é entregue 
        para o usuário.

        Basicamente falando o echo e o print são uma 'janela' entre a programação e o 
        arquivo HTML propriamente dito. E é atravéz dele que será feito a impressão do 
        conteúdo trabalhado na lógica do php dentro do documento.

        Então pode-se passar variáveis, cujos valores serão impressos no documento. Ou 
        pode-se também passsar resultados de processamentos que retornam cadeias de 
        caracteres.
    -->

    <!-- 
        Outra coisa que pode-se fazer é, a impressão de elementos HTML. Como uma quebra de 
        linha <br /> , ou então a inclusão de um hr <hr> .

        E o interessante é que os elementos HTML adicionados são adicionados como 'nós' dentro
        da árvore de elementos da página, ou seja, esses elementos passaram a existir no DOM da 
        página HTML. 
     -->

    <?php 
        // para impressão de cadeias de caracteres, precisa-se passar encapsular seja por aspas simples ou aspas duplas. ('' "" )
        echo 'Comando echo <br />'; 

        print"Comando print <hr>";
        echo print("Comando print <hr>");
    ?>

    <!-- 
        Mas por quê duas instruções para fazer a impressão de conteúdos em páginas HTML?

        O echo é um CONSTRUTOR da linguagem.
        Enquanto o print inicialmente era uma FUNÇÃO.

        A grande diferença é que por o print ser uma função que possui um RETORNO, é possível
        capturar esse retorno.

        Para teste irei dar um echo da função print na linha 38.
        Neste caso teremos um retorno que será ' 1 ' . Mas por quê 1?
        Quando a função print é executada corretamente ela retorna 1. Todavia, quando existe algum
        erro no resultado dessa função ela retorná 0.
        Sendo esta uma característica peculiar do print.

        E justamente pelo print ser executado em duas etapas. Sendo que primeiro ele imprime o 
        conteúdo e na sequência ele retorna um valor aparente, esta função acaba se tornando mais
        lenta que o echo. No entanto essa lentidão é imperceptível, quase não notando diferença de
        tempo dde impressão entre as duas instruções.
    -->
</body>
</html>
