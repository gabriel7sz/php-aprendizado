<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando | Foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar nav bg-primary text-white p-4 justify-content-center navbar-light">
        <span class="nav-brand display-6" >
            Praticando com Loops Foreach
        </span>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h4 class="text-danger">Relembrando</h4>
                <p class="lead">
                    O foreach é uma estrutura de repetição especializada em arrays e objetos. Então diferente dos demais,
                    o foreach é um pouco mais limitado, consequentemente por ser especializado, ele se é mais inteligente
                    para lidar com arrays e objetos.
                </p>
                <h4 class="text-danger">Como recuperar as chaves dos arrays?</h4>
                <p class="lead">
                    Para recuperar os índices dos arrays, podemos atribuir por parâmetro na chamada do laço foreach, uma
                    segunda variável para o <b>índice</b>. Assim, inteligentemente o foreach entende que a primeira variável a
                    aparecer por parâmetro será atribuída ao <b>índice</b>, e a segunda variável a aparecer por parâmetro, irá
                    receber o elemento dentro daquele índice.
                </p>
                <p class="lead">
                    Porém as duas variáveis precisam estar separadas por um token, para que o interpretador do PHP, compreenda
                    de forma clara que a primeira variável seja específica para alguma coisa, enquanto a segundo seja para a outra.
                    Esse token é o <b class="text-danger">=></b>.
                    Segue como ficaria o exemplo na prática:
                </p>
                <p class="lead text-success">
                    foreach($funcionarios as $idx => $nomefuncionario){}
                </p>

                <h4 class="text-danger">Como funciona com arrays multidimensionais?</h4>
                <p class="lead">
                    Quando falamos de arrays encapsulados por arrays, estamos tratando de um array multidimensional.
                    E se ele tiver índices associados aos elementos, temos um array associativo. No exemplo em que vamos 
                    trabalhar, teremos as duas coisa juntas, ou seja, um array multidimensional associativo.
                    Mantendo a lógica dos funcionários, como podemos acessar cada funcionário individualmente?
                </p>
                <p class="lead text-success">
                    foreach($funcionariosDois as $idx => $funcionario){}
                </p>
                <h4 class="text-danger">Mas como acessar um índice específico dentro de um array multidimensional?</h4>
                <p class="lead">
                    Podemos <b>encadear</b> um foreach dentro do outro. Se colocarmos a variável que recebe o array multidimensional,
                    como parâmetro para um foreach encadeado, podemos percorrer seus elementos internos, que foram anexados de forma associativa.
                    Por exemplo:
                </p>
                <p class="lead text-success">
                    foreach($funcionariosDois as $idx => $funcionario) { <br>
                        foreach($funcionario as $idxDois => $valor) { <br>
                            echo"$idxDois - $valor"; <br>
                        };}; <br>
                </p>
                <p class="lead">
                    No exemplo acima existem algumas nuâncias. Por exemplo as variáveis $idx e $idxDois. Quando se trata de 
                    foreach encadeado, tem que tomar cuidado com o nome das variáveis, pois uma pode receber uma atribuição indevida
                    da outra variável de mesmo nome, que na execução da repetição do laço pode gerar algum bug no código. Portanto cuidado!
                    A outra situação é a criação de mais uma variável com o token <b class="text-danger">=></b>. Que neste exemplo
                    será a variável que receberá o elemento do array encadeado percorrido, enquanto a variável $idxDois receberá o índice
                    associativo desse mesmo array.
                </p>

            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-danger">Códigos php:</h4>
                        <p class="lead">
                            <?php 
                                $funcionarios = array('João', 'José', 'Júlia');
                                echo "<pre>";
                                print_r($funcionarios);
                                echo "</pre>";
                                foreach($funcionarios as $idx => $nomefuncionario) {
                                    echo "Índice: $idx;  Nome do funcionário: $nomefuncionario.<br />";
                                    }
                                    ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="">
                            <?php 
                                $funcionariosDois = array(
                                    array('nome' => 'Gabriel', 'salario' => 3000 , 'periodo' => 'integral', 'data_nascimento' => '17/09/2003'),
                                    array('nome' => 'Rafael', 'salario' => 1500, 'periodo' => 'manhã', 'data_nascimento' => '10/09/2012'),
                                    array('nome' => 'Gustavo', 'salario' => 8000, 'periodo' => 'integral', 'data_nascimento' => '26/11/2009')
                                );
                                print_r($funcionariosDois);
                                echo "<br />";
                                echo "<br />";
                                
                                foreach($funcionariosDois as $idx => $funcionario) {
                                    foreach($funcionario as $idxDois => $valor) {   
                                        echo "$idxDois - $valor,  ";
                                    }
                                    echo "<hr />";
                                }


                            ?>
                        </p>
                    </div>
                </div>

                    
                
                    


                
                
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>