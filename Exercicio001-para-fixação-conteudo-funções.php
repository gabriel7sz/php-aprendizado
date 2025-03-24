<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 001</title>
</head>
<body>

<?php 
    /*
        Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.

        Para calcular o valor do imposto a ser pago, considere os critérios abaixo:

        Até 1903,98            = Isento
        De 1903,99 até 2826,65 = 7%
        De 2826,66 até 3751,05 = 15%
        De 3751,06 até 4664,68 = 22,5%
        Acima de 4664,68       = 27,5%
    */ 

    function calcularIRPF($salario) {
        $porcentagem = 0;

        if ($salario > 4664.68) {
            $porcentagem = 27.5;
            $impostoSerCobrado = $porcentagem / 100 * $salario;
            echo "Como você recebe mais que R$4664,68 você pagará 27,5%. Que no total com base no que você ganha fica: R$$impostoSerCobrado";

        } elseif ($salario >= 3751.06 and $salario <= 4664.68) {
            $porcentagem = 22.5;
            $impostoSerCobrado = $porcentagem / 100 * $salario;
            echo "Como você recebe entre R$3751.06 e R$4664,68 você pagará 22,5%. Que no total com base no que você ganha fica: R$$impostoSerCobrado";

        } elseif ($salario >= 2826.66 && $salario <= 3751.05) {
            $porcentagem = 15;
            $impostoSerCobrado = $porcentagem / 100 * $salario;
            echo "Como você recebe entre R$2826.66 e R$3751.05 você pagará 15%. Que no total com base no que você ganha fica: R$$impostoSerCobrado";

        } elseif ($salario >= 1903.99 and $salario <= 2826.65) {
            $porcentagem = 7;
            $impostoSerCobrado = $porcentagem / 100 * $salario;
            echo "Como você recebe entre R$1903.99 e R$2826.65 você pagará 7%. Que no total com base no que você ganha fica: R$$impostoSerCobrado";

        } elseif ($salario <= 1903.98) {
            echo 'Como você recebe até R$1903.98 você é isento de impostos.';
        }
    }

    echo calcularIRPF(1903.98);

?>
    
</body>
</html>