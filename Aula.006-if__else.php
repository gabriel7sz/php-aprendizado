<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se | Se não</title>
</head>
<body>
    
    <!-- 
        O comando if else consiste em uma estrutura de controle. Possiilitando com base de uma respectiva condição,
        definir diferentes fluxos que a aplicação poderá seguir.

        A sintaxe é em simples, sendo começada com a palavra resevada ( if ) , seguida da CONDIÇÃO, que deve estar
        contida dentro de parênteses, seguido por abre e fecha chaves ( { } ) .

        Caso a condição seja VERDADEIRA, o bloco de código contido dentro das chaves do comando if é executado.
        Caso a condição seja FALSA, o bloco dentro da estrutara do if é desconsiderado.

        Já a instrução else, é opcional e se for necessário, é colocado logo após ao bloco de código da instrução if.
        A instrução else equivale-se ao SE NÃO para a condição estabelecida no if.

        Os comandos if else podem ser encadeados. Ou seja, dentro do primeiro bloco pode-se haver mais condições a 
        serem testadas, consecutivamente.
    -->

        <?php 

            //operadors relacionais                   // operadores lógicos

            // ==                                     AND ou &&
            // ===                                    OR ou ||
            // !==                                    XOR    
            // != ou <>                               !
            // <
            // >                        XOR retorna verdadeiro se alguma das expressões for
            // <=                       verdadeira e a outra falsa.            
            // >=

            if(7 >= 4 XOR 10 < 15) {
                echo 'Verdadeiro';

            } else {
                echo 'Falso';           

            }

            echo '<br />';

            /*
                Para enteder melhor o operador de negação ( ! ) , usei o exemplo de cima.
                O que acontece quando usa-se o operador de negação?

                0- É montada a sintaxe noralmente de uma estrutura if, com a adição de um parênteses
                e o operador de negação. Assim:

                if( !(condição) ) {}

                1- A condição dentro dos parenteses do if é decidida normalmente.

                2- Em seguida com a utilização do parenteses e sinal de negação, basicamente
                troca-se o resultado para o oposto alcançado na condição. Ou seja, se for true,
                tornara-se false, e vice-versa. Exemplo:
            */ 

            //     ( v        v ) = F = !(F) = V
            if(!(7 >= 4 XOR 10 < 15)) {
                echo 'Verdadeiro de negação (!)';

            } else {
                echo 'Falso de negação (!)';

            }

        ?>  

</body>
</html>
