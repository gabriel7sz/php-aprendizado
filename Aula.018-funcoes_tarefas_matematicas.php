<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Tarefas Matemáticas</title>
</head>
<body>


        <h1>Funções Matemáticas</h1>
        <h2>Função ceil() - Arredonda o valor para cima.</h2>
        <?php 
            $num1 = 7.3;
            echo 'Número da variável é: ' . $num1 . '<br />';
            $ceilNum1 = ceil($num1);
            echo 'Número da variável com a função ceil() é: ' . $ceilNum1. '<br />';

            // Mas quando o número for negativo? A função ceil() sempre arredondará em direção ao zero. Exemplo:
            $num2 = -4.45;
            echo 'Número da variável é: ' . $num2 . '<br />';
            $ceilNum2 = ceil($num2);
            echo 'Número da variável com a função ceil() é: ' . $ceilNum2;
        ?>

        <h2>Função floor() - Arredonda o valor para baixo.</h2>
         <?php 
            $num3 = 4.5;
            echo 'Número da variável é: ' . $num3 . '<br />';
            $floorNum3 = floor($num3);
            echo 'Número da variável com a função floor() é: ' . $floorNum3. '<br />';

            // Mas quando o número for negativo? A função floor() sempre arredondará em direção oposta ao zero. Exemplo:
            $num4 = -8.22;
            echo 'Número da variável é: ' . $num4 . '<br />';
            $floorNum4 = floor($num4);
            echo 'Número da variável com a função floor() é: ' . $floorNum4;
        ?>

        <h2>Função round() - Arrendonda o valor com base na fração.</h2>
        <h3>Sempre arredondará para baixo, caso a fração for inferior a .4, diferentemente se for igual ou superior a .5</h3>
        <?php 
            $num5 = 5.5;
            echo 'Número da variável é: ' . $num5 . '<br />';
            $roundNum5 = round($num5);
            echo 'Número da variável com a função round() é: ' . $roundNum5. '<br />';

            $num6 = 2.4;
            echo 'Número da variável é: ' . $num6 . '<br />';
            $roundNum6 = round($num6);
            echo 'Número da variável com a função round() é: ' . $roundNum6. '<br />';

            $num7 = -10.51;
            echo 'Número da variável é: ' . $num7 . '<br />';
            $roundNum7 = round($num7);
            echo 'Número da variável com a função round() é: ' . $roundNum7;
        ?>

        <h2>Função rand() - Gera um valor aleatório.</h2>
        <!-- Quando não colocada com um intervalo, a função rand(), gera números aleatórios
        de 0 ao randmax da máquina que está rodando a aplicação. Para saber qual é o randmax basta 
        utilizar uma função nativa do php chamada getrandmax() -->

        <?php 
            $rand = rand();
            echo 'O número aleatório gerado pelo método rand() foi: ' . $rand . '<br />';
            echo 'O número máximo da máquina recuperado com o getrandmax() é: ' . getrandmax() . '<br />';
        ?>
        <!-- E para gerar um intervalo controlado podemos passar por parâmetro na função, um valor de
        saída e um de chegada, por exemplo entre 1 e 3.  -->
        <?php 
            $rand2 = rand(1, 3);
            echo 'O número aleatório gerado pelo método rand() com intervalo de 1 a 3 foi: ' . $rand2 . '<br />';
        ?>

        <h2>Função sqrt() - Retorna a raiz quadrada de um valor.</h2>
        <?php 
            $sqrt = 10;
            echo 'O número da variável é: '. $sqrt . '<br /> A sua raiz quadrada com o método sqrt() é: ' . sqrt($sqrt);
        ?>
</body>
</html>