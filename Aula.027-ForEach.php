<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .emphasis {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg justify-content-center bg-dark p-3">
        <span class="navbar-brand text-light">Foreach</span>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <h4 class="emphasis">
                    Comando Foreach
                </h4>
                <p class="lead">
                    O comando de repetição <b class="emphasis">foreach</b> é um comando especializado para arrays e objetos.
                    Anteriormente, utilizamos os comandos while, do while e for, para percorrer arrays. E é totalmente possível,
                    porém para alcançar esse objetivo foi necessário criar algumas variáveis de controle, e também, estabelecer alguma
                    condição de existência para a estrutura de repetição, seja ela qual fosse.
                </p>
                <p class="lead">
                    O <b class="emphasis">Foreach</b> é um pouco mais inteligente que isso. Como ele é especializado para arrays e objetos,
                    o controle de finalizção das interações está intrínseca no comando. Ou seja, pode-se simplismente passar o array, e assim, 
                    automaticamente o comando <b class="emphasis">Foreach</b> finaliza as interações quando chega ao final desse mesmo array.
                </p>
                <div class="row">
                    <div class="col-3">
                        <h4 class="emphasis">Por exemplo:</h4>
                        <p class="lead">
                            Temos esse seguinte array: <br>
                            <?php 
                                $itens = array('sofá', 'televisão', 'rádio', 'geladeira');
                                echo "<pre>";
                                print_r($itens);
                                echo "</pre>";
                        
                            ?>
                         </p>
                    </div>
                    <div class="col-9 mt-4">
                        <p class="lead">
                            Se executarmos o laço foreach neste array, com a simples função de imprimir a variável criada,
                            cada vez que o looping for executado, o resultado seria esse:
                        </p>
                        <p class="lead">
                            <?php 
                                foreach($itens as $variavel) {
                                    echo "O resultado da variável agora é: " . $variavel . "<br />";
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                                <p class="lead">
                                    Então perceba que com apenas o comando foreach, o PHP tem a inteligência para percorrer 
                                    todos os elementosdo array, sem necessariamente, estabelecer critérios e condições de 
                                    paradas.
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                                <h4 class="emphasis">Outros detalhes</h4>
                                <p class="lead">
                                    Então sabendo disso, é possível realizar manipulações mais complexas com cada elemento do array.
                                    Por exemplo, se o $item = rádio, podemos realizar uma interação específica com o elemento rádio.
                                </p>
                                <p class="lead">
                                    Saída código PHP: <br>
                                    <?php 
                                        foreach($itens as $item) {
                                            if ($item == 'rádio') {
                                                echo "Ao comprar um rádio, você ganha 25% de desconto. <br />";
                                            }                       
                                        };
                                    ?>
                                </p>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-4 text-secondary p-10">
                <h3 class="emphasis">Síntaxe</h3>
                <p class="lead">
                    foreach($array as $variavel) { <br>

                    }
                </p>
                <p class="lead">
                    Começando pela   palavra reservada Foreach. Em seguida de abre e fecha parênteses (), que espera por parâmetro qual
                    array que será percorrido, na sequência do token <b class="emphasis">as</b> para definir uma variável. Essa variável 
                    irá receber o valor contido em cada um dos índices percorridos do array.
                </p>
                <p class="lead">
                    E em seguida abre fecha chaves {}, sendo que dentro das chaves fica o 
                    que será executado até o foreach percorrer todos os elementos do array.
                </p>
            </div>

        </div>
       



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>