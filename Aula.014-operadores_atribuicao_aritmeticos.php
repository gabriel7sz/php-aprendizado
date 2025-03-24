<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição de operadoes aritméticos</title>
</head>
<body>
    
    <?php 
        $x = 10;

        $x = $x + 5;
        // ou $x += 5;

        echo $x;

        /*
            Lembrando que pode-se ser feito a atribuição mais enxuta com todos os tipos de operações aritméticas.
            Como:

            $x -= $x;
            $x *= $x;
            $x /= $x;
            $x %= $x;
            
        */ 
    ?>

</body>
</html>