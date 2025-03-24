<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>

    <?php 
        /*
            Quando se desenvolve regras de negócios, na maior parte das vezes precisamos repetir lógicas
            idênticas em diversas partes do código. É justamente nesse ponto que as funções salvam os desenvolvedores
            dentro de todas as linguagens de programação.

            Funções permitem estabelecer pequenos programas, com objetivos bem específicos que podem ser chamados em
            qualquer hora e em qualquer lugar da lógica de aplicação, sempre que necessário.
            Assim possibilitando uma melhor manutenção, leitura e um código mais limpo e enxuto.

            A declaração de uma função é bastante simples. Começando com a palavra reservada ' function ' , seguida
            pelo nome da função (Geralmente é utilizado pelo menos duas palavras combinadas, separadas por uma letra
            maiúscula, como: exibirBoasVindas ou calcularAreaTerreno). Após a definição de um nome, precisa-se abrir
            e fechar parenteses (). É justamente dentro desses parenteses que podemos ou não, encaminhar parâmetros
            para a função. Na sequência abre-se e fecha-se chaves {}, para incluir o bloco de código que estará com
            a lógica da função. Uma sintaxe consideravelmente simples.

            Pontos técnicos e esclarecimentos:
            
            Parâmetros, tamém conhecidos como argumentos, são uma espécie de 'entrada de dados' para a função.
            Pode-se escolher não passar parâmetros para função, ou passar quantos necessários, bastando separá-los por
            vírgulas. Vale lembrar que parâmetros são variáveis, portanto a definição de nomes de parâmetros deve
            seguir a regra de declarção de nomes de variáveis.

            Dentro do bloco de código da função é possível trabalhar com estruturas condicionais, laços de repetição,
            funções bidimensionais, funções recursivas, arrays, métodos de busca, enfim. Pode-se trabalhar com todos os
            recursos da linguagem de programação para estabelecer o sucesso na lógica da função.
        */

        #void function  
        function exibirBoasVindas() {
            echo 'Bem vindo usuário! <br />';
        }
        exibirBoasVindas();

        #return function
        function cacularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }
        $resultado = cacularAreaTerreno(7, 25);
        echo $resultado;

    ?>
    
</body>
</html>
