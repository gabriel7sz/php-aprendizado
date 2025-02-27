<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embutindo blocos PHP em páginas HTML</title>
</head>
<body>

    <?php 
        echo 'Usando Tag padrão';
    ?>

    <br />

    <?= 
        'Usando Tag Impressão';
    ?>

</body>
</html>