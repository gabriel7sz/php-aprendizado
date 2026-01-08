<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio #001</title>
</head>
<body>
    
    <!-- 
        Crie uma aplicação capaz de identificar se uma determinada pessoa
        pode ou não doar sangue.

        Utiize as variáveis idade e peso no processo. Neste primeiro momento faça
        a atribuição de valores de forma estática.

        Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for
        igua ou superior a 50kg, então o sistema deve imprimir a mensagem ^ Atente aos 
        requisitos  ^, caso contrário o sistema deve imprimir a mensagem ^  Não atende aos
        requisitos. ^
    -->

    <?php 

        $idade = 10;
        $peso = 50;

        if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo 'Você atende aos requisitos de idade e peso.';
           
        } else {
            echo 'Você não atende aos requisitos de idade ou peso.';
        }

    ?>

</body>
</html>