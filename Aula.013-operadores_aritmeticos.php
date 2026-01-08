<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    
    <?php 

        /*
            Operadores:

            Adição ( + ) - Soma valores.
            Subtração ( - ) - Diferença entre valores.
            Multiplicação ( * ) - Produto dos valores.
            Divisão ( / ) - Quociente dos valores.
            Módulo ( % ) - Resto existente em uma operação de divisão. Sempre retorna um valor Inteiro
        */
        
        $numeroUm = 13;
        $numeroDois = 4;

        // debug
        echo "A soma entre $numeroUm e $numeroDois é: " . ($numeroUm + $numeroDois);        
        echo '<br />';
        echo "A subtração entre $numeroUm e $numeroDois é: " . ($numeroUm - $numeroDois);
        echo '<br />';
        echo "A multiplicação entre $numeroUm e $numeroDois é: " . ($numeroUm * $numeroDois);        
        echo '<br />';
        echo "A subtração entre $numeroUm e $numeroDois é: " . ($numeroUm - $numeroDois);        
        echo '<br />';
        echo "A divisão entre $numeroUm e $numeroDois é: " . ($numeroUm / $numeroDois);
        echo '<br />';
        echo "O módulo entre $numeroUm e $numeroDois é: " . ($numeroUm % $numeroDois);  //sempre retorna um valor inteiro   
 
    ?>

</body>
</html>
