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
            background:#292a2d; 
            color: white;
            border-radius: 8px; 
            padding: 10px;
        }

        .block__code {
            width: 500px;
        }

        .emphasis {
            color: green;
            cursor: pointer;
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
            <h1>O que são <b class="emphasis">Loop`s?</b></h1>
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
                Ou seja, executar alguma coisa, até que não haja mais a necessidade de repetição.
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
                esgotamento de memória ram, travando assim a aplicação.
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
                Como podemos utilizar o laço <b class="emphasis">While</b>
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
                acréscimo de uma variável. Existe o comando <b class="emphasis">break</b>, que parará a execução do comando, não 
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
                    Também existe o comando <b class="emphasis">continue</b>, que diferente do comando
                    <b class="emphasis">break</b>, o comando 
                    <b class="emphasis">continue</b> não interrompe a execução do laço de repetição 
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
                Bom, repare que neste código acima, houve uma instrução <b class="emphasis">continue</b>
                e nela foi especificado se a variável $num10 for igual aos números 2 e 6, pulasse para o próximo bloco de códigos,
                que neste caso seria a impressão da váriável $num10. Por isso que na saída não foi impresso no navegador, quando
                a variável estava com os incrementos 2 e 6. 
            </p>
            <br>
            <p>
                Cuidado ao utilizar o comando <b class="emphasis">continue</b>. Verifique antes de executar
                que mesmo após a utilização do comando <b class="emphasis">continue</b>, o critério de parada
                da lógica do laço de repetição está preservado, ou será considerado novamente. Pois se não, ocorrerá um loop infinito.
            </p>
        </div>

        <div class="title">
            <h1>Como podemos utilizar o laço <b class="emphasis">Do While</b></h1>
        </div>
        <div class="container__content">
            <p>
                Começaremos pela sintaxe do comando Do While:
            </p>
            <div class="div__code__php" style="width: 200px;">
                <code>
                      do {<br>(Bloco de código)<br>
                    } while(condição);<br>
                </code>
            </div>
            <p>
                Começando pela palavra reservada <b class="emphasis">do</b> em seguida de abre e fecha chaves {}. 
                Dentro das chaves sempre irão os códigos que queremos repetir. <br>
                Por conseguinte a palavra reservada <b class="emphasis">While</b>, seguida de abre e fecha parênteses ().
                Dentro dos parênteses sempre irá a condição de parada do laço de repetição.
            </p>
        </div>
        <div class="title">
            <h3>Quais as diferenças entre While e Do While?</h3>
        </div>
        <div class="container__content">
            <p>
                A diferença entre esses dois comandos é bastante sutil. Se nos lembrarmos da sintaxe do comando <b class="emphasis">while</b>,
                veremos que a primeira interação é checar a condição primeiro, e se estiver de acordo, executar o bloco de códigos. <br>
                Diferentemente do comando <b class="emphasis">do while</b>, que garante que o bloco de códigos executará pelo menos
                uma vez, visto que em sua sintaxe, a primeira interação são os blocos de códigos, para somente no final, fazer a comparação
                da condição necessária. <br>
                Segue um exemplo para melhor visualização:
            </p>
            <div class="div__code__php" style="width: 700px; height: 130px;">
                <div style="float: left;">
                    <b class="emphasis">do while</b> <br>
                    <code>
                        $x = 10; <br>
                        do { <br>
                            echo "Entrou no comando DO"; <br>
                        } while($x < 9); <br>
                    </code>
                </div>
                <div style="float: right;">
                    <b class="emphasis">while</b> <br>
                    <code>
                        $x = 10; <br>
                        while($x < 9) { <br>
                            echo "Entrou no comando while"; <br>
                        }; <br>
                    </code>

                </div>
            </div>
            <p>
                Repare que nesta situação somente o comando <b class="emphasis">do while</b> teria um retorno. Pois dentro 
                do comando <b class="emphasis">while</b> o bloco de código nunca será executado, enquanto $x for menor que 10.
                Diferentemente do <b class="emphasis">do while</b> que vai executar sempre primeiro o código, independente da condição.
            </p>
            <?php
                /*
                $x = 10;
                do {
                    echo "entrou no bloco";
                } while ($x < 9);
    
                while($x < 9) {
                    echo "entrou no bloco de codigo while";
                }
                */
            ?>
            
        </div>

         <div class="title">
            <h3>Outros detalhes</h3>
        </div>
        <div class="container__content">
            <p>
                Assim como no comando while, podemos também utilizar o comando <b class="emphasis">continue</b> e o comando
                <b class="emphasis">break</b> dentro do loop do while. <br>
            </p>
        </div>

         <div class="title">
            <h1>Como podemos utilizar o laço <b class="emphasis">For</b></h1>
        </div>
        <div class="container__content">
            <p>
                Primeiro, começamos pela sintaxe:
            </p>
            <div class="div__code__php" style="width: 350px;">
                <code>
                    for(variável; condição; incremento) { <br>
                    }
                </code>
            </div>
            <p>
                Então esta é a sintaxe. Palavra reservada <b class="emphasis">for</b> seguida de abre e fecha parênteses. <br>
                Estes parênteses esperam três atributos como parâmetro. Uma <b class="emphasis">variável</b>, uma <b class="emphasis">condição</b> e um 
                <b class="emphasis">incremento</b>.
            </p>
            <p>
                O primeiro parâmetro é a variável que precisamos iniciar, para auxílio do controle da <b class="emphasis">condição</b> do laço for. 
                Que por sua vez é o segundo parâmetro. <br>
                E o terceiro parâmetro é o incremento, ou seja, a <b class="emphasis">lógica</b> que estabelecerá um critério de parada sobre a variável que está sendo usada na condição. 
            </p>
            <p>
                Observando sua sintaxe, o laço For, organiza as três informações necessárias para a criação de uma estrutura de repetição, sem que haja 
                um looping infinito. Tudo isso, em uma única linha. Sendo que a sequência, a ordem, desses parâmetros é muito importante.
            </p>
        </div>
         <div class="title">
            <h3>Qual a diferença do laço For, para os demais laços de repetição?</h3>
        </div>
        <div class="container__content">
            <p>
                Se nos lembramos bem, quando utilizamos os laços while e do while, precisamos criar as variáveis das lógicas de estruturas de repetição,
                fora do escopo do próprio laço. Mas no caso do <b class="emphasis">for</b>, ele traz isso para dentro do contexto da estrutura de repetição.
                Ou seja, é possível criar essa variável, sendo o primeiro parâmetro do laço for. <br>
            </p>
            <p>
                Segue exemplo prático:
            </p>
            <div class="div__code__php" style="width: 550px; display: grid; grid-template-columns: auto auto;">
                <div>
                    <b class="emphasis">Código escrito:</b> <br>
                    <code>
                        for($y = 1; $y < 10; $y++) { <br>
                            echo "$y"; <br>
                        } <br>
                    </code>
                </div>
                <div>
                    <b class="emphasis">Saída do código:</b> <br>
                    <?php 
                        for ($y = 1; $y <= 10; $y++) { 
                            echo "A variável y agora vale = $y <br />";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="title">
            <h3>Outros detalhes</h3>
        </div>
        <div class="container__content">
            <p>
                Também é possível passar a condição como <b class="emphasis">true</b>, ou omití-la, em sua atribuição. Todavia quando isso é feito, será
                necessário a criação de uma condição de parada <b class="emphasis">dentro</b> do escopo do laço for. Utilizando o <b class="emphasis">break</b><div class=""></div>.
            </p>
            <div class="div__code__php"  style="width: 600px; display: grid; grid-template-columns: auto auto;">
                <div>
                    <b class="emphasis">com true:</b> <br>
                    <code>
                        for($y = 0; true; $y++) { <br>
                            if($y >= 20) { <br>
                                break; <br>
                            } <br>
                            echo "$y"; <br>
                        }
                    </code>
                </div>
                <div>
                    <b class="emphasis">omitindo:</b> <br>
                    <code>
                        for($y = 20; ' ' ; $y--) { <br>
                            if($y == 0) { <br>
                                break; <br>
                            } <br>
                            echo "$y"; <br>
                        } <br>
                    </code>
                </div>
            </div>
        </div>

        
    </div> <!-- Fim container -->
    
</body>
</html>