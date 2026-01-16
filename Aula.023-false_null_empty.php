<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 22px;
        background: linear-gradient(90deg,rgba(20, 72, 92, 1) 25%, 
        rgba(5, 71, 97, 1) 50%, rgba(20, 72, 92, 1) 75%);
        color: black;
        margin: 20px;
    }

    h2, h1, h3, h4 {
        color: white;
    }
</style>
<body>
    <div>
        <h1>False, Null e Empty em PHP</h1>
        <p>
            É importante entender as diferenças entre <strong>false</strong>, <strong>null</strong> e 
            <strong>empty</strong> em PHP, pois cada um deles representa um conceito distinto, apesar de
            serem frequentemente confundidos.
        </p>
        <h2>
            False
        </h2>
        <p>
            <strong>False</strong> é um valor booleano que indica uma condição falsa. Ele é usado em 
            expressões lógicas e condicionais. <br>Por exemplo:
        </p>
        <p>
            <code>
                $var = false; <br>
                if ($var) { <br>
                &nbsp;&nbsp;echo "Verdadeiro"; <br>
                } else { <br>
                &nbsp;&nbsp;echo "Falso"; <br>
                }
            </code>
        </p>
        <h2>
            Null
        </h2>
        <p>
            <strong>Null</strong> representa a ausência de valor ou uma variável que não foi 
            inicializada. Quando uma variável é atribuída como null, ela não contém nenhum dado. 
            <br>Exemplo:
        </p>
        <p>
            <code>
                $var = null; <br>
                if (is_null($var)) { <br>
                &nbsp;&nbsp;echo "A variável é nula"; <br>
                }
            </code>
        </p>
        <h2>
            Empty
        </h2>
        <p>
            <strong>Empty</strong> é uma função que verifica se uma variável está vazia. Uma variável 
            é considerada vazia se for: "", 0, "0", null, false, array() (um array vazio) ou uma 
            variável não definida. <br>Exemplo:
        </p>
        <p>
            <code>
                $var = ""; <br>
                if (empty($var)) { <br>
                &nbsp;&nbsp;echo "A variável está vazia"; <br>
                }
            </code>
        </p>
    </div>
    <div>
        <h3>Resumo</h3>
        <ul>
            <li><strong>False</strong>: Valor booleano que representa uma condição falsa.</li>
            <li><strong>Null</strong>: Indica a ausência de valor ou uma variável não inicializada.</li>
            <li><strong>Empty</strong>: Função que verifica se uma variável está vazia.</li>
        </ul>
    </div>
    <div>
        <h4>
            Vamos fazer algus testes:
        </h4>
        <div>
            <?php 

                // Definindo variáveis para teste.
                $funcionario1 = null;
                $funcionario2 = "";
                $funcionario3 = false;
                // Agora vamos descobirir qual o valor de cada variável para tomadas de decisão.
                
                /*
                    Como testar se uma variável é null?
                    Para fazer isso, podemos usar uma função nativa do php : is_null(), passando
                    a variável que queremos testar como parâmetro.

                    O retorno dessa função será true ou false.
                */ 
                
                if(is_null($funcionario1)) {
                    echo 'Sim , a variável $funcionario1 é null.<br>';
                } else {
                    echo 'Não, a variável $funcionario1 não é null.<br>';
                ;}

                echo '<br>';

                // Agora o que acontece se testarmos a variável $funcionario2?
                if(is_null($funcionario2)) {
                    echo 'Sim , a variável $funcionario2 é null.<br>';
                } else {
                    echo 'Não, a variável $funcionario2 não é null.<br>';
                };

                //Agora como testar se uma variável está vazia?
                /*
                    Para fazer isso, podemos usar uma função nativa do php : empty(), passando
                    a variável que queremos testar como parâmetro.

                    O retorno dessa função será true ou false.
                */

                echo '<br>';

                if(empty($funcionario1)) {
                    echo 'Sim , a variável $funcionario1 está vazia.<br>';
                } else {
                    echo 'Não, a variável $funcionario1 não está vazia.<br>';
                };

                echo '<br>';

                // Testandido a variável $funcionario2

                if(empty($funcionario2)) {
                    echo 'Sim , a variável $funcionario2 está vazia.<br>';
                } else {
                    echo 'Não, a variável $funcionario2 não está vazia.<br>';
                };

                echo '<br>';

                // Repare que a variável $funcionario1 é null e também está vazia. 
                // Isso quer dizer que todo valor null é considerado vazio, mas nem todo valor vazio é null.

                /*
                    Agora como testar se uma variável é false?
                    Para fazer isso, podemos usar uma comparação direta com o valor false.
                */ 
                 
                if($funcionario3 === false) {
                    echo 'Sim , a variável $funcionario3 é false.<br>';
                } else {
                    echo 'Não, a variável $funcionario3 não é false.<br>';
                };

                /*
                    Agora atente-se que uma variável false também é considerada vazia.
                    Portanto, todo valor false é considerado vazio, mas nem todo valor vazio é false.
                */ 
                /*
                    Não saber lidar com esses conceitos pode levar a erros lógicos no código,
                    especialmente em estruturas condicionais, loops e chamadas em funções.
                    E geralmente, esses erros podem ser difíceis de detectar, pois o código pode
                    não gerar erros de sintaxe, mas sim comportamentos inesperados.
                */ 
            ?>
        </div>
    </div>
</body>
</html>