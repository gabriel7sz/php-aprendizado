<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas para manipulação de Strings</title>
</head>
<body>
    
    <?php 
        /*
            No PHP existe algumas funções nativas disponibilizadas para manipulação de string. Certamente que grande 
            parte dos problemas utilizando strings pode ser resolvidos com uma função ou a combinação de algumas
            funções. 
            Abaixo algumas funções para manipulação de strings:

            strtolower($texto) - Transforma todos os caracteres da string em minúsculos.

            strtoupper($texto) - Transforma todos os caracteres da string em maiúsculos.

            ucfirst($texto) - (uc é a abreviação de upperCase) Transforma o primeiro caractere da string em 
            maiúsculo.

            strlen($texto) - Conta a quantidade de caracteres de uma string.

            str_replace(<procura por>, <substitui por>, $texto) - Substitui uma cadeia de caracteres por outra dentro
            de uma string.

            substr($texto, <posicao inicial>, <qtdade de caracteres>) - Retorna parte de uma string.
        */ 

        $texto = 'i`m ozzymandyas <br />';

        // strtolower()
        echo $texto;
        echo strtolower($texto);

        echo '<br />';

        // strtoupper()
        echo $texto;
        echo strtoupper($texto);
        
        echo '<br />';
              
        //ucfirst()
        echo $texto;
        echo ucfirst($texto);

        echo '<br />';
        
        //strlen()
        echo $texto;            /** Lembrando que os caracteres em branco também serão contados. */
        echo strlen($texto);

        echo '<br />';

        //str_replace()
        echo $texto;
        echo str_replace('i`m', 'my name is', $texto);

        echo '<br />';

        //substr()
        echo $texto;
        echo substr($texto, 4, 12);

    ?>

</body>
</html>