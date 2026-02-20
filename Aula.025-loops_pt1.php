<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops | Introdução</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        html {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #a2a7b8;
        }

        header {
            background-color: #191a1c;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px;
            color: white;
            border-bottom: 2px solid black;
        }

        .ul_header {
            display: flex;
        }

        .li_header{
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin-left: 40px;
            padding: 10px;
        }

        header ul li a {
            color: white;
            font-size: 20px;
        }

        .container {
            width: 1200px;
            height: auto;
            margin: 0 auto;
        }

        .title {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .container__content {
            margin-top: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
            font-weight: 600;
            font-size: larger;
            padding: 10px;
        }

        .div__code__php {
            margin: 20px auto; 
            background: #FFF; 
            border-radius: 8px; 
            padding: 10px;
        }

        .block__code {
            width: 500px;
        }

    </style>

</head>
<body>

    <header>
        <div>
            <h1>Loops | Introdução</h1>
        </div>

        <div>
            <ul class="ul_header">
                <li class="li_header">
                    <a href="">teste1</a>
                </li>
                <li class="li_header">
                    <a href="">teste1</a>
                </li>
                <li class="li_header">
                    <a href="">teste1</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="container">
        <div class="title">
            <h1>O que são Loop`s?</h1>
        </div>
        <div class="container__content">
            <p>
                Loops são estruturas de repetição. Mas o que são estruturas de repetição?
            </p>
            <p>
                Também chamadas de laços ou loops, as estruturas de repetições permitem a possibilidade
                de executar um comando, ou bloco de códigos, até atender alguma determinada condição.
            </p>
            <p>
                Ou seja, executar alguma coisa, até que não haja mais a necessidade de repetição daquela
                lógica.
            </p>
        </div>
        <div class="title" style="margin-top: 20px;">
            <h1>
                Para que utilizamos as estruturas de repetição?
            </h1>
        </div>
        <div class="container__content">
            <p>
                A aplicação de estruturas de repetições é muito vasta. Podemos por exemplo, utiliza-las
                para recuperar informações dentro de um arquivo,<br> lendo linha a linha deste arquivo.
            </p>
            <p>
                Podemos utiizar os Loop's por exemplo, para exibir informações recuperadas de bancos de dados.
            </p>
            <p>
                Podemos utilizar para: Realização de cálculos; Composição de totalizadores; etc.
            </p>
        </div>
         <div class="title" style="margin-top: 20px;">
            <h1>
                Outros detalhes
            </h1>
        </div>
        <div class="container__content">
            <p>
                Os Loop's para seu funcionamento ideal, esperam um comando de finalização, sinalizando que 
                não é mais necessário a execução da lógica da estrutura de repetição.
            </p>
            <p>
                Ao não fazer isso, acontece o que tem nome de LOOP INFINITO, pois o loop executará infinitamente,
                podendo ser até prejudicial ao processamento da máquina que o está executando, portanto, atenção se
                a lógica do loop que está sendo trabalhado, for muito complexa, pois isso pode até executar em um
                esotamento de memória ram, travando assim a aplicação.
            </p>
            <br>
            <p>
                Estudaremos as quatro estruturas de Loop's presentes no PHP. Sendo elas:
            </p>
            <p>
                While, Do While, For, Foreach .
            </p>
        </div>

        <div class="title" style="margin-top: 20px;">
            <h1>
                Como podemos utilizar o laço <b>While</b>.
            </h1>
        </div>

        <div class="container__content">
            <p>
                Bom, primeiro começaremos com a sintaxe do comando <b>while</b>:
            </p>
            
            <div style="display: flex;">
                <div class="div__code__php" style="width: 200px;">
                        <code>
                            while(condicao) {
                            }
                        </code>
                </div>
            </div>
            
            <p>
                Faremos alguns testes. Digamos que precisamos de uma lógica em que a instrução do loop, precisa
                se repetir até uma variável chamada $num1 ser menor que o número 10. Teremos o seguinte código:
            </p>
            
            <div class="div__code__php block__code">
                <code>
                    $num1 = 1;<br>
                    echo "-- Inicio do Loop --";<br>
                    <br>
                    while($num1 < 10) {<br>
                        echo "$num1";<br>
                        $num1++;<br>
                    } echo "-- Fim do Loop --"<br>

                </code>
            </div>

           <p>
                Segue a execução do código PHP:
           </p>

           <div class="div__code__php block__code">
                <?php 
                    $num1 = 1;
                    echo "-- Inicio Loop -- <br />";

                    while ($num1 < 10) {
                        echo "$num1 <br />";
                        $num1++;
                    } echo "-- Fim Loop --";
                ?>
           </div>
                
           <p>
                Lembrando que a lógica para a parada de execução do loop, não precisa ser simplismente um
                acréscimo de uma variável. Existe o comando <b style="color: red; cursor: pointer;">break</b>, que parará a execução do comando, não 
                importando aonde o comando break está no escopo do código.
           </p>
            <p>
                Por exemplo:
            </p>
            <div class="div__code__php block__code">
                <code>
                    $num1 = 1;
                    <br>
                    while($num1 < 1000) {<br>
                        echo "$num1";<br>
                        $num1 += 100;<br>
                        if($num1 > 500){<br>
                            break;<br>
                        }<br>
                    } <br>
                </code>
            </div>
            <p>
                Segue a execução do código PHP:
            </p>

            <div class="div__code__php block__code">
                <?php 
                    $num1 = 0;
                    echo '-- Inicio Loop --<br />';
                    while($num1 < 1000) {
                        echo "$num1 <br />";
                        $num1 += 100;

                        if ($num1 > 500) {
                            break;  
                        }
                    } echo '-- Fim Loop --<br />';
                ?>
            </div>
            <div>
                <p>
                    Também existe o comando <b style="color: red; cursor: pointer;">continue</b>, que diferente do comando
                    <b style="color: red; cursor: pointer;">break</b>, o comando 
                    <b style="color: red; cursor: pointer;">continue</b> não interrompe a execução do laço de repetição 
                    como um todo, o que acontece é que ele pula para o próximo bloco de comando do laço de repetição.
                </p>
            </div>
            <div class="div__code__php block__code">
                    <code>
                        $num10 = 0;<br>
                        echo '-- Inicio Loop --';<br>
                        while($num10 > 10) {<br>
                        &nbsp;$num10++;<br>
                        &nbsp;if($num10 == 2 || $num10 == 6) {<br>
                        &nbsp;&nbsp;continue;<br>
                        &nbsp;}<br>
                        &nbsp;echo $num10;<br>
                        } echo '-- Fim loop --' <br>
                    </code>
            </div>
            <p>
                Segue execução em PHP:
            </p>
            <div class="div__code__php block__code">
                <?php 
                    $num10 = 0;
                    echo "--Inicio Loop -- </br>";
                    while($num10 < 10) {
                        $num10++;
                        if($num10 == 2 || $num10 == 6){
                            continue;
                        }
                        echo "$num10  </br>";
                    } echo '-- Fim Loop --'
                ?>
            </div>
            <p>
                Bom, repare que neste código acima, houve uma instrução <b style="color: red; cursor: pointer;">continue</b>
                e nela foi especificado se a variável $num10 for igual aos números 2 e 6, pulasse para o próximo bloco de códigos,
                que neste caso seria a impressão da váriável $num10. Por isso que na saída não foi impresso no navegador, quando
                a variável estava com os incrementos 2 e 6. 
            </p>
            <br>
            <p>
                Cuidado ao utilizar o comando <b style="color: red; cursor: pointer;">continue</b>. Verifique antes de executar
                que mesmo após a utilização do comando <b style="color: red; cursor: pointer;">continue</b>, o critério de parada
                da lógica do laço de repetição está preservado, ou será considerado novamente. Pois se não, ocorrerá um loop infinito.
            </p>
        
        </div>

    </div> <!-- Fim container -->
    
</body>
</html>