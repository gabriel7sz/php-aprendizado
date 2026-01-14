<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array's Multidimensionais</title>

    <style>
        * {
            font-family: Arial, 'sans-serif';
            text-decoration: none;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header {
            display: flex;
            align-items: center;
            background-color: #28437D;
            height: 80px;
            padding: 20px;
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            font-size: 20px;
            font-weight: 400;
            padding: 40px;
            background-color: #5b89eda3;
            border-radius: 20px;
            width: 1100px;
            margin: 20px auto;
            /* height: calc(100vh - 120px); */
        }

        .espacamento {
            margin-top: 20px
        }

       .contentPHP {
            display: flex;
       }

        #listaCoisaFrutas {
            width: 600px;
            padding: 30px;
            border-radius: 9px;
            background-color: #28437D;
            color: white;
        }

        #listCoisasPessoas {
            width: 600px;
            padding: 30px;
            border-radius: 9px;
            background-color: #28437D;
            color: white;
            margin-left: 10px;
        }

        #listaCoisasCompletas {
            width: 1040px;
            padding: 30px;
            border-radius: 9px;
            background-color: #28437D;
            color: white;
        }


    </style>
</head>

<body>

    <header>
        <h1>Array's Multidimensionais || Bi-dimensionais</h1>
    </header>
    <div class='container'>

        <div>
            <h3>Mas afinal o que são?</h3>
            <p>
                Nada mais são que Arrays de Arrays. 
            </p>
            <p>
                Os Arrays básicos constituem listas indexadas de variáveis.
                Já em Arrays multidimensionais é possível atráves de uma variável ou índice, acessar 
                <b>outros</b> Arrays, e assim por diante.
            </p>
            <p>
                Basicamente, pode-se encadear dentro de arrays, mais arrays, e nisso criar a quantidade necessária
                de dimensões para tender as necessidades do projeto.
            </p>    
        
        </div>

        <div class="espacamento">
            <h2>Mas você deve estar se perguntando...</h2>

            <div class="espacamento">
                <p>
                    <b>Se é possível ter arrays distintos, dentro da aplicação, qual razão para precisar de um array 
                    multidimensional, com grau de complexidade maiores?</b>
                </p>
            </div>

            <div class="espacamento">
                <p>
                    Bom, em consultas muitas complexas, em montagem de relatórios por exemplo, é super comum com base
                    no retorno dos dados do banco de dados, fazer um agrupamento das informações em arrays multidimensionais.
                    Para que no momento da exibição destes dados, no template do formulário por exemplo, é muito mais fácil
                    lidar com as informações.
                </p>
                <p>
                    Embora a complexidade dos arrays multidimensionais seja razoável, é um recurso que sem dúvia vale-se 
                    compreender bem. Na prática é mais fácil, vamos lá:
                </p>
            </div>
        </div>

        <div class="contentPHP">

            <div id="listaCoisaFrutas" class="espacamento">
                <?php
                    //criando um array listaCoisas
                    $listaCoisas = array();
                    /*
                        criando um array associativo, listaCoisas[frutas], porém quando é atribuío um array em 
                        um índice de outro array , é possível passar os valores dentro desse array criado.
                        Lembrando que esses valores passados, os índices, podem ser tanto numéricos ou sequenciais, 
                        quanto, associativos.
                    */
           
                    // passando índices númericos - sequencias
                    echo 'Índices numéricos no índice <b>frutas</b> do array listaCoisas:';
                    $listaCoisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
                    echo '<pre>';
                    print_r($listaCoisas['frutas']);
                    echo '</pre>';
                ?>
            </div>

            <div id="listCoisasPessoas" class='espacamento'>
                <?php 
                    //criando outro array para outro índice do array associativo (#listaCoisas)
                    echo 'Índices associativos no índice <b>pessoas</b> do array listaCoisas:';
                    $listaCoisas['pessoas'] = array('um' => 'Gabriel', 'dois' => 'Rafael', 'três' => 'Gustavo', 'quatro' => 'Miguel');
                    echo '<pre>';
                    print_r($listaCoisas['pessoas']);
                    echo '</pre>';
                ?>
            </div>
        </div>

        <div class="espacamento" style="margin-left: 275px">
            <h4>Agora mostrando o array multidimensional completo:</h4>
        </div>

        <div class="espacamento" id="listaCoisasCompletas">
            <?php 
                //mostrando o array associativo completo
                echo 'Leitura do array listaCoisas com seus índices de arrays multidimensionais:';
                echo '<br />';
                echo '<br />';
                echo '<pre>';
                print_r($listaCoisas);
                echo '/<pre>';
            ?>
        </div>

    </div>  <!-- fim container -->
</body>
</html>