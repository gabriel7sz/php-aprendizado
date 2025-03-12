<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipos de variáveis</title>
</head>
<body>

    <?php 
        /*
            O que é o casting de tipos de variáveis?

            Nada mais é do que converter uma determinada variável, de um tipo para o outro.

            Mas por quê isso é interessante?

            Em linguagens de programação que não existe a definição explícita de variável, como o php, ocorre que essa
            determinada variável pode ter seu TIPO modificado, ou no processo de atribuição, ou pelo contexto que ela 
            está sendo interpretada pelo php. Podendo acarratar erros.

            Para descobrir o ripo de uma variável pode-se usar a função gettype() . Esta função espera um parâmetro,
            que é a própria variável a ser testada, e a função retorna o tipo da variável.
        */ 

        // Nesta variável abaixo tem-se um número inteiro, logo a função retornará ( integer ).
        $valorInt = 10;
        /*
            Mas se precisar fazer o casting da variável $valor para float, seria preciso fazer da maneira abaixo:
            < novaVariavel = (o nome do tipo p/ casting) variavelQueReceberáCasting >

            Como o casting foi para o tipo float, a função retornará ( double ou real ).
        */ 
        $valorFloat = (float) $valorInt; //podendo tambem utilizar como real ou double

        // convertendo para string
        $valorString = (string) $valorFloat;

        // convertando para boolean
        // no caso do boolean ele retornará 1 para true (caractere válido), e não retornará nada se o conteúdo da variável que está fazendo casting for vazio.
        $valorBoolean = (boolean) $valorString; //podendo tambem utilizar apenas bool

        /*
            Variáveis int podem fazer casting para:   float e string                     
            Variáveis float podem fazer casting para:   int e string
            Variáveis string podem fazer casting para:  int, float e boolean 
            Variáveis boolean podem fazer casting para: int, string

        */ 


        // debug
        echo $valorInt . ' ' . gettype($valorInt);
        echo '<br />';
        echo $valorFloat . ' ' . gettype($valorFloat);
        echo '<br />';
        echo $valorString . ' ' . gettype($valorString);
        echo '<br />';
        echo $valorBoolean . ' ' . gettype($valorBoolean);
                        
    ?>
    
</body>
</html>