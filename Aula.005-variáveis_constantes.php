<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Constantes</title>
</head>
<body>
    
    <!-- 
        Variáveis constantes são variáveis que não podem ter seus valores modificados na instância da aplicação.
        
        Geralmente, mas não exclusivamente, variáveis contantes são utilizadas para parametrização de ambiente de
        apicação. Como uma solicitação de conexão com um banco de dados em um sistema de desenvolvimento. 

        A característica de não ser uma variável e sim, uma constância, faz com que variáveis constantes tornem-se
        mais seguras. Isso por que evita de o valor ser soreposto de forma indevida ao longo da lógica do script.

        A definição de variáveis constantes é um pouco diferente das variáveis normais. Isso porquê, para criar 
        constantes no php, precisa-se de uma função chamada ( define() ) .
        Esta função espera dois parâmetros. 
        Primeiro: o NOME DA VARIÁVEL, que é sumetido para função em formato de string.
        Segundo: um VALOR para esta variável.

        Para constantes de forma geral em programação, é uma boa prática o uso de caracteres maiúsculos. 
        
        Pode-se em qualquer lugar do script, recuperar as variáveis constantes, não sendo necessário a utilização
        do sinal dólar ( $ ) .

        Assim como a sintaxe de declaração é diferente, a sintaxe de recuperação também é. Bastando usar apenas o nome
        da respectiva variável.
    -->

    <?php 
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_bd_dev');
        define('BD_SENHA', 'senha_bd_dev');
    
        echo BD_URL . '<br />';
        echo BD_USUARIO . '<br />';
        echo BD_SENHA . '<br />';
    ?>      


</body>
</html> 