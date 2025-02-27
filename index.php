<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embutindo blocos PHP p/ HTML</title>
</head>
<body>

    <!-- 
        Como embutir blocos de códigos PHP em páginas HTML?

        O PHP é uma linguagem de programação interpretada, por isso precisa-se utilizar tags
        para encapsular esses trechos de código, para submeter essa codificação, para um
        interpretador PHP. De tal modo, para que retorne a interpretação desse código como 
        sendo um conteúdo HTML complementar. Que por fim, será entregue para quem fez a 
        requisição da página.

        Há 3 maneiras de inclusão de blocos PHP dentro do HTML a partir de tags. São essas:

        tag padrão:            <?php  ?>     Vindo habilitada

        tag impressão:          forma listada abaixo do comentário.

        tag curta:             <?     ?>     Vindo desabilitada | Desabilitada na versão 8
    -->

    <?= 'Usando Tag Impressão';?>

    <br />

    <?php echo 'Usando Tag padrão';?>

    <!-- 
        Lembrando que para esta inserção funcionar corretamente o arquivo precisa estar
        como .php , isso porque um arquvi php, é interpretado pelo compilador do php antes
        de formar a saída html que será entregue para quem fez a requisição da página.

        Se fosse um arquivo .html terá um problema. Pois arquivos .html ou qualquer outra 
        extensão que não o php, não passaria pelo processo de interpretação php antes de 
        formar a saída necessária.
    -->

    <!-- 
        É possível a inserção de tags php em qualquer escopo do arquivo html, dentro de 
        qualuqer tag html ou até mesmo fora delas.

        No php origatoriamente é necessário um ponto e vírgula(;) ao final de cada instrução.
        Exigindo bastante atenção para não esquecer de utilizar o ponto e vírgula.
    -->
</body>
</html>