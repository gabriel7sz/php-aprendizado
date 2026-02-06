<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas para Manipular Arrays</title>

    <style>
        * {
        
            list-style: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-size: 20px;
        }

    </style>
</head>
<body>
    <h1>
        Função in_array()
    </h1>
    <p>
        Verifica se o valor passado por parâmetro é um array.<br>
        Retorna true ou false. True se o valor for um array, ou false caso contrário.
    </p>

    <div>
        <h4>Código php:</h4>
        <?php 

            $array = 'String';
            $array2 = ['Notbook', 'Celular', 'PC'];
            $retorno = is_array($array2);

            if($retorno) {
                echo 'É um array';
            } else {
                echo 'Não é um array';
            };

        ?>
    </div>

    <h1>Função array_keys()</h1>
    <p>
        Retorna todas as chaves de um array passado por parâmetro.
    </p>

    <div>
        <?php 
            $array3 = [
                1 => 'a',
                7 => 'b',
                18 => 'c'
            ];
            echo '<pre>';
                print_r($array3);
            echo '</pre>';             
        ?>
    </div>
    <p>
        Com o array_keys é possível por exemplo extrair todos os índices do array acima e obter como retorno
        um novo array com esses índices.
    </p>
    <div>
       <?php 
            $chaves_array3 = array_keys($array3);
            echo '<pre>';
                print_r($chaves_array3);
            echo '</pre>';
       ?>
    </div>

    <h1>Função sort()</h1>
    <p>
        A função sort() ordena os elementos de um array em ordem crescente. (Ordem alfabética).
    </p>

    <div style="display: flex;">
        <div style="margin-left: 20px;">
            <p><b>Sem ordenação</b></p>
            <?php
            $array4 = ['Laranja', 'Abacaxi', 'Uva', 'Maçã', 'Banana'];
            echo '<pre>';
                print_r($array4);
            echo '</pre>';

            // Retorna true se conseguir ordenar o array e false caso contrário.
            sort($array4);
            ?>
        </div>
        <div style="margin-left: 50px;">
            <p>
                <b>Com ordenação</b>
            </p>
             <?php 
                echo '<pre>';   
                    print_r($array4);
                echo '</pre>';
             ?>
        </div>
    </div>
    <p>
        Lembrando que a função sort() modifica os índices do array original. Fazendo com que os 
        índices sejam renumerados. 
    </p>
    <p>
        Então atenção ao utilizar essa função se os índices forem importantes.
    </p>

    <h1>Função asort()</h1>
    <p>
        Análoga a função sort(), a função asort() ordena os elementos de um array em ordem crescente, porém
        preserva os índices originais do array.
    </p>
    
    <div style="display: flex;">
        <div style="margin-left: 10px;">
            <p><b>Sem ordenação</b></p>
            <?php 
                $array5 = [1 => 'Ford', 2 => 'Land-Rover', 3 => 'Honda', 4 => 'Toyota'];
                echo '<pre>';
                    print_r($array5);
                echo '<pre>';
                asort($array5);
            ?>
        </div>
        <div style="margin-left: 40px;">
            <p><b>Com ordenação mantendo os índices</b></p>
            <?php 
                echo '<pre>';
                    print_r($array5);
                echo '<pre>';
            ?>
        </div>
    </div>
    
    <h1>Função count()</h1>
    <p>
        A função count(), quanta a quantidade de elementos que tem dentro de um array.
    </p>

    <div style="display: flex;">
        <?php 
            $array6 = ['Camaro', 'Chevete', 'Corvete', 'Cruze', 'Mustang', 'Omega', 'Opala', 'Corcel', 'Shelby'];
            echo '<pre>';
                print_r($array6);
            echo '<pre>';
            
            $retornoCount = count($array6);
            echo 'O retorno da quantidade dos ites do array é: ';
            print_r($retornoCount);
        ?>
    </div>

    <h1>Função array_merge()</h1>
    <p>
        Essa é uma função muito interessante pois ela permite fundir vários arrays em um único array.
    </p>

    <p>
        Digamos que possuímos diversos arrays, vindos de diferentes fontes, porém a logica da aplicação pede
        a união de todos em um único array, é possível utilizarmos o array merge. 
    </p>
    <p>
        Para isso, basta concatenar os arrays por parâmetro para unificação.
    </p>
    <div>
        <?php 
            $array7 = ['Osx', 'Windows'];
            $array8 = array('Linux');
            $array9 = ['Solaris'];

            $arrayMerge = array_merge($array7, $array8, $array9);
            echo '<pre>';
                print_r($arrayMerge);
            echo '<pre>';
        ?>
    </div>

    <h1>Função explode()</h1>
    <p>
        A função explode() é responsável por divir uma string baseada em um delimitador.
    </p>
    <p>
        Sendo que o retorno dessa divisão é dada em um array.
    </p>

    <div>
        <p>
            Então digamos que eu tenho a seguinte string: 17/09/2003.
        </p>
        <p>
            E temos como missão, por qualquer que seja o motivo ou logica de aplicação, 
            dividir essa string nas suas barras. (/)            
        </p>
        <p>
            Então precisa-se passar como parâmetro, primeiro o <b>delimitador</b>, que é onde desejamos
            fazer a modificação, que neste caso é a barra (/).
        </p>
        <p>
            E por segundo parâmetro a string desejamos modificar. E o retorno é dado em um array.
        </p>
        <?php 
            $string = '17/09/2003';
            $arrayExplode = explode('/', $string);
            echo '<pre>';
                print_r($arrayExplode);
            echo '<pre>';
        ?>
    </div>
</body>
</html>