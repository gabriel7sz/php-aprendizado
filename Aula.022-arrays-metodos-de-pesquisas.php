<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays | Métodos de Pesquisas</title>

    <style>

    </style>
</head>
<body>
    <div>
        <div>
            <h1>Como realizar pesquisas dentro de arrays com PHP?</h1>
            <p>
                Existem duas funções nativas no PHP, para lidar com métodos de pesquisas  em arrays.
            </p>
            <p>
                Que são as funções: <b>in_array()</b> e <b>array_search()</b>.
            </p>
        </div>
        <div>
           <?php 
                // criando um array simples
                $lista_frutas = array("Banana", "Maçã", "Morango", "Uva");
                echo '<pre>';
                print_r($lista_frutas);
                echo '</pre>';
           ?>
        </div>
        <div>
            <p>
                Digamos que se tem como objetivo encontrar uma fruta específica dentro do array. Por exemplo
                "Morango".
            </p>
            <p>
                Pode-se usar as duas funções mencionadas acima para realizar essa tarefa. Porém estas funções
                funcionam de maneiras diferentes.
            </p>
            <p>
                A função <b>in_array()</b> verifica se um valor existe em um array e retorna um valor booleano
                (true ou false).
            </p>
            <p>
                Já a função <b>array_search()</b> procura por um valor em um array e retorna a chave correspondente
                se o valor for encontrado, ou false se não for encontrado.
            </p>
            <p>
                Para usar função <b>in_array()</b>, é preciso passar dois parâmetros: o valor a ser pesquisado e o 
                array onde a pesquisa será realizada. Neste caso precisamos verificar se "Morango" está presente no array
                $lista_frutas. O código ficaria assim:
            </p>
            <p>
                $fruta_procurada = "Morango";<br>
                if(in_array($fruta_procurada, $lista_frutas)){<br>
                    echo "A fruta <b>$fruta_procurada</b> foi encontrada no array.";<br>
                } else {<br>
                    echo "A fruta <b>$fruta_procurada</b> não foi encontrada no array.";<br>
                }<br>
            </p>
            <p>
                <b>Retorno código php:</b>
            </p>
        </div>
        <div>
            <?php
                $fruta_procurada = "Abacaxi";
                if(in_array($fruta_procurada, $lista_frutas)){
                    echo "A fruta <b>$fruta_procurada</b> foi encontrada no array.";
                } else {
                    echo "A fruta <b>$fruta_procurada</b> não foi encontrada no array.";
                }
            ?>
        </div>
        <div>
            <p>
                Agora, para usar a função <b>array_search()</b>, o código ficaria assim:
            </p>
            <p>
                $fruta_procurada = "Morango";<br>
                $chave = array_search($fruta_procurada, $lista_frutas);<br>
                if($chave !== false){<br>
                    echo "A fruta <b>$fruta_procurada</b> foi encontrada no array na posição $chave.";<br>
                } else {<br>
                    echo "A fruta <b>$fruta_procurada</b> não foi encontrada no array.";<br>
                }<br>
            </p>
            <p>
                <b>Retorno código php:</b>
            </p>
        </div>
        <div>
            <?php
                $fruta_procurada = "Uva";
                $chave = array_search($fruta_procurada, $lista_frutas);
                if($chave !== false){
                    echo "A fruta <b>$fruta_procurada</b> foi encontrada no array na posição $chave.";
                } else {
                    echo "A fruta <b>$fruta_procurada</b> não foi encontrada no array.";
                }
            ?>
        </div>
        <div>
            <p>
                Em resumo, use <b>in_array()</b> quando quiser apenas verificar a existência de um valor em um array,
                e use <b>array_search()</b> quando precisar saber a posição (chave) do valor dentro do array.
            </p>
            <h2>Agora, como realizar a pesquisa em arrays multidimensionais?</h2>
            <p>
                Muito cuidado, pois quando falamos de array multidimensionais, parece que falamos de coisas diferentes,
                msa na essencia é a mesma coisa, são arrays. Então por mais que significam arrays dentro de arrays, a 
                lógica de pesquisa das funções continuam as mesmas, atuando sempre em um array específico.
            </p>
            <p>
                Vamos primeiro criar um array multidimensional:
            </p>
        </div>
        <div>
            <?php 
                $lista_modelos = array(
                    'um' => 'Sedan',
                    'dois' => 'SUV',
                    'tres' => 'Hatchback',
                    'quatro' => 'Crossover'
                );

                $lista_marcas = array(
                    'um' => 'Toyota',
                    'dois' => 'Ford',
                    'tres' => 'Honda',
                    'quatro' => 'Chevrolet'
                );

                $lista_veiculos = [
                    'modelos' => $lista_modelos,
                    'marcas' => $lista_marcas
                ];

                echo '<pre>';
                print_r($lista_veiculos);
                echo '</pre>';
            ?>
        </div>
        <div>
            <p>
                Bom, agora vamos supor que queremos encontrar o modelo "SUV" dentro do array multidimensional $lista_veiculos.
                Podemos usar a função <b>in_array()</b> ou <b>array_search()</b> em um dos arrays internos.
            </p>
            <p>
                Usando <b>in_array()</b>:
            </p>
            <p>
                $modelo_procurado = "SUV";<br>
                if(in_array($modelo_procurado, $lista_veiculos['modelos'])){<br>
                    echo "O modelo <b>$modelo_procurado</b> foi encontrado no array de modelos.";<br>
                } else {<br>
                    echo "O modelo <b>$modelo_procurado</b> não foi encontrado no array de modelos.";<br>
                }<br>
            </p>
            <p>
                <b>Retorno código php:</b>
            </p>
        </div>
        <div>
            <?php
                $modelo_procurado = "SUV";
                if(in_array($modelo_procurado, $lista_veiculos['modelos'])){
                    echo "O modelo <b>$modelo_procurado</b> foi encontrado no array de modelos.";
                } else {
                    echo "O modelo <b>$modelo_procurado</b> não foi encontrado no array de modelos.";
                }
            ?>
        </div>
        <div>
            <p>
                Bom, agora utilizando o array_search, digamos que queremos encontrar a marca "Ford" 
                dentro do array multidimensional $lista_veiculos. Podemos usar a função <b>array_search()</b> no array interno de marcas.
            </p>
            <p>
                $marca_procurada = "Ford";<br>
                $chave = array_search($marca_procurada, $lista_veiculos['marcas']);<br>
                if($chave !== false){<br>
                    echo "A marca <b>$marca_procurada</b> foi encontrada no array de marcas na posição $chave.";<br>
                } else {<br>
                    echo "A marca <b>$marca_procurada</b> não foi encontrada no array de marcas.";<br>
                }<br>
            </p>
            <p>
                <b>Retorno código php:</b>
            </p>
        </div>
        <div>
            <?php
                $marca_procurada = "Ford";
                $chave = array_search($marca_procurada, $lista_veiculos['marcas']);
                if($chave !== false){
                    echo "A marca <b>$marca_procurada</b> foi encontrada no array de marcas na posição $chave.";
                } else {
                    echo "A marca <b>$marca_procurada</b> não foi encontrada no array de marcas.";
                }
            ?>
        </div>

    </div>    
    
</body>
</html>