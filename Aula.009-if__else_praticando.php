<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If | Else</title>

    <style>
        * {
            font-size: 19px;
        }
    </style>
</head>
<body>
    
    <?php 

        // Imagine uma regra de negócio de um Ecommerce que dê desconto no frete, em compras acima de 400.00 reais.

        $usuario_possui_cartao_loja = true;
        $valor_compra = 400;
        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if ($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
            $valor_frete = 0;

        } elseif ($usuario_possui_cartao_loja == true && $valor_compra >= 300){
            $valor_frete = 10;

        } elseif ($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
            $valor_frete = 25;

        } else {
            $recebeu_desconto_frete = false;
        }


    ?>

    <h1>Detalhes do pedido</h1>
    <p><b>Possui cartão da loja?</b>
        <br>
        <!-- Com operador ternário -->
        <?=$usuario_possui_cartao_loja == true ?  'SIM' : 'NÃO'; ?>
        
    </p>
    
    <p><b>Valor compra:</b><br> R$<?= $valor_compra?>,00.</p>

    <p><b>O cliente recebeu desconto no frete?</b>
        <br>
        <?= $recebeu_desconto_frete == true ? 'SIM' : 'NÃO'; ?>
    </p>

    <p><b>Qual foi o valor total no frete?</b>
        <br>
        <?= $valor_frete == 0 ? 'O cliente não precisou pagar frete pois a compra foi acima de R$ 400,00 reais.' : 'O frete ficou ' . $valor_frete . ',00.' ?>
    </p>

</body>
</html>
