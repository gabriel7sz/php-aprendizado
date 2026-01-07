<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução Arrays</title>

    <style>
        *{
            /* background-color: #999; */
            font-size: 20px;
            font-family: 'Arial', sans-serif;
            text-decoration: none;
            list-style: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 900px;
            height: calc(100vh - 100px);
            margin: auto;
        }

        header {
            width: 100%;
            height: 100px;
            background-color: #111;
            border: 1px solid black;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #FFF;
        }

        .correct {
            background-color: #111;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: center; 
            flex-direction: column;
            margin-top: 20px;
            color: #111;
            padding: 20px
        }

        p {
            margin-top: 20px;
            font-size: 20px;
        }

        h2 {
            align-self: start;
        }

        .div_content {
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formatar-div {
            width: 300px;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px
        }

        #div1, #div2 { 
            background-color: #777;
            background: #777;  
            margin-left: 10px
        }

        #Dica {
            background-color: #777;
            padding: 20px
        }

    </style>
</head>
<body>
   
    <header>
        <div>
            <h1 class="correct">ARRAYs</h1>
        </div>
        <div>
            <h3 class="correct">Introdução a Arrays</h3>
        </div>
        
    </header>
    <div class="container">
        <div class="content-container">

            <h1 class="titulo">Array Básico</h1>
            <h2>O que são Arrays?</h2>
            <p>
                Arrays são listas ordenadas. Basicamente falando Arrays são variáveis que é pertmitido
                relacionar itens associados a índices. Este tipo de array tenta imitar a lista do mundo real.
            </p>

            <div class="div_content">

                <div id="div1" class="formatar-div">
                     <h3>Com variáveis:</h3>
                    <ul>
                        <li>
                            $variavel_1 = 'Banana'
                        </li>
                        <li>
                            $variavel_1 = 'Maça'
                        </li>
                        <li>
                            $variavel_1 = 'Laranja'
                        </li>
                        <li>
                            $variavel_1 = 'Uva'
                        </li>
                    </ul>
                </div>
                    
                <div id="div2" class="formatar-div">
                    <h3>Com array:</h3>
                    <ul>
                        <li>
                            $lista_frutas[1] = 'Banana'
                        </li>
                        <li>
                        $lista_frutas[2] = 'Maça'
                        </li>
                        <li>
                            $lista_frutas[3] = 'Laranja'
                        </li>
                        <li>
                            $lista_frutas[4] = 'Uva'
                        </li>
                    </ul>
                </div>
                
            </div> 

            <h2>Arrays Sequenciais</h2>

            <div>
                <p>
                    Pode-se passar como parâmetro para o construtor do objeto Array, os índices desejados,
                    assim eles seguirão uma sequência. <br>Por exemplo: <b>$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');</b> <br><br>
                </p>
            </div>
            <div id="Dica">
                <h3>Dica</h3>
                <p>
                    Para debugar no PHP, pode-se usar duas funções.<br> A função:
                    var_dump(); Passando por parâmetro o que deve ser debugado. <br>Por exemplo: <b>var_dump($lista_frutas);</b><br>
                    <br>Ou também a função: print_r(); Que também espera por parâmetro o array para teste.<br>
                    Por exemplo; <b>print_r($lista_frutas);</b><br>
                    Lembrando que estas funçoes nativas servem apenas como debug e elas imprimem no documento o retorno da busca.
                </p>
            </div>

            <div>
                <h4>Trecho PHP</h4>
                <?php 
                    $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
                ?>
                <h5>Debug com tag var_dump();</h5>
                <?php var_dump($lista_frutas);?>
                <h5>Debug com tag print_r();</h5>
                <?php print_r($lista_frutas);?>
            </div>

        </div> <!-- fim content-container -->
    </div>  <!-- fim container -->

</body>
</html>