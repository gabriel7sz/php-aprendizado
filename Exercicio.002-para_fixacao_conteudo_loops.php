<?php 
    /*
        Crie um script capaz de produzir, através de um laço de repetição,
        um array com 6 elementos numéricos entre 1 e 60, simulando o funcionamento
        do sorteio da mega sena. Atente-se ao fato de que os números aleatórios
        conridos dentro do array não podem ser repetidos.
    */ 

        // criando o array que receberá os 6 números aleatórios
    $sorteioMega = array();
        // criando critério de parada, para ter no máximo 6 elementos
    while(count($sorteioMega) <= 5) {
            // criando a variável que cria os números aleatorios
        $num = rand(1,60);
            // lógica para verificar se o número criado por $num, perternce ao array $sorteioMega. Caso retorne true, será false, por conta do operador. 
        if (!in_array($num, $sorteioMega)) {
            $sorteioMega[] = $num;
        }
        }
        echo "<pre>";
        print_r($sorteioMega);
        echo "</pre>";
?>