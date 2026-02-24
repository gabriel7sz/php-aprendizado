<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com loops</title>

    <!-- Import bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .emphasis {
            border: 1px solid red;
        }
    </style>

    <?php 

        // Criando um array mulidimensional.
        $historiaMarcas = array(
            array('titulo' => 'Ferrari', 'conteudo' => 'Fundada em 1939, Maranello, Italy.'),
            array('titulo' => 'Ford', 'conteudo' => 'Fundada em 1903, Detroid, Michigan, EUA.'),
            array('titulo' => 'Fiat', 'conteudo' => 'Fundada em 1899, Turin, Italy')
        );
        // Imprimindo o array, para entender que a primeira dimensão é numérica, cada número representando um array, dentro do array $carros
        // echo '<pre>';
        // print_r($historiaMarcas);
        // echo '</pre>';
        echo '<h2>' . 'Com While' . '</h2>';
        // Criando lóica para recuperar cada um dos arrays, em cada posição. E imprimir no html.
        $idx = 0;
        while($idx < count($historiaMarcas)) {
            echo '<h4>' . $historiaMarcas[$idx]['titulo'] . '</h4>';
            echo '<hr>';
            echo '<p>' .  $historiaMarcas[$idx]['conteudo'] . '</p>';
            $idx++;
        }

        echo '<br /><br /><br />';
        echo '<h2>' . 'Com do While' . '</h2>';

        $indice = 0;
        do {
            echo '<h4>' . $historiaMarcas[$indice]['titulo'] . '</h4>';
            echo '<hr>';
            echo '<p>' .  $historiaMarcas[$indice]['conteudo'] . '</p>';
            $indice++;
        } while ($indice < count($historiaMarcas));

        echo '<br /><br /><br />';
        echo '<h2>' . 'Com For' . '</h2>';
        
        for($ind = 0; $ind < count($historiaMarcas); $ind++) {
            echo '<h4>' . $historiaMarcas[$ind]['titulo'] . '</h4>';
            echo '<hr>';
            echo '<p>' .  $historiaMarcas[$ind]['conteudo'] . '</p>';
        }

    ?>  
    <!-- Import script bootstrap -->
     <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
</body>
</html>