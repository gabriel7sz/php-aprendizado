<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Manipular Datas</title>
</head>
<body>
    
    <!-- Quando fala-se em manipulação de datas, há dois desafios.
    O primeiro desafio é aprender como recuperar a informação da data corrente, de forma automática
    sem que o usuário se de conta disso.
    O segundo desafio é um pouco mais complexa, é aprender a calcular a diferença entre as datas.
    Na prática é mais fácil: -->

    <?php 
        /*
            Como recuperar a data atual / data corrente ?
            O php tem uma função nativa para recuperar a data, chama-se função: date();
            Esta função date espera por parâmetro uma formatação de string para a data recuperada.
            Todos os 'tokens' estão presentes para consulta na documentação ofical do PHP.
        */ 

            // recuperando dia/mes/ano/horas
            echo date('d/m/Y/ H:i');
            echo '<br />';
            
            /*
                Muitas vezes o horário recuperado pode estar incorreto na primeira vista, pois 
                precisa-se 'setar' o timezone default do php para com coerência seja o mesmo do 
                browser que está rodando a aplicação.

                Para descobrir qual o timezone utilizado na aplicação, utiliza-se a função nativa
                date_default_timezone_get();
            */ 
            echo date_default_timezone_get();

            /*
                Para `setar` o timezone corretamente, a duas maneiras de faze-lo. A primeira é a 
                modificação direta no local de instalação do PHP.
                Ou utilizar-se também de uma função nativa do php para setar um novo timezone escolhido.
                date_default_timezone_set(); 
                Que espera por parâmetro qual timezone espera-se na aplicação. ;
            */ 
            date_default_timezone_set('America/Sao_Paulo');
            echo '<br />';
            echo date('d/m/Y/ H:i');

            /*
                O próximo desafio seria calcular a diferença entre datas. O conceito timeStamp.
                Quando trabalha-se com datas em linguagens de programação ou em banco de dados,
                sempre é utilizado datas em formato norte americano; ano/mes/dia .

                É recomendável este paradigma pois os padrões computacionais esperam isso. Portanto
                quando precisa-se utilizar lógicas com data no padrão brasileiro por exemplo, espera-se
                que esta data seja convertida para o formato norte americano, pois a maioria das funções
                nativas das linguagens de programação, esperam por padrão, o conceito norte americano.
                Como é o caso na linguagem php com a função: 
                strtotime(data); - Transformar data em segundos.

            */ 
            echo '<br />';
            /*
                Para calcular datas, primeiro é preciso transformar as informações em algo que se possa
                calcular, no exemplo abaixo, possuí-se strings, precisa-se converter estas imformações
                para 'timestamp' = Uma representação de tempo.

                O timestamp foi introduzido nos sistemas unix em 1970, então a função strtotime(),
                calculará a diferença entre a data escolhida para a data de 01/01/1970.
            */ 

            $data_inicial = '2018-04-24';
            $data_final = '2018-05-15';
            
            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);
            echo $data_inicial . ' - ' . $time_inicial;
            echo '<br />';
            echo $data_final . ' - ' . $time_final;

            $diferenca_times = $time_final - $time_inicial;
            echo '<br />';
            echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times;
    ?>  

</body>
</html>