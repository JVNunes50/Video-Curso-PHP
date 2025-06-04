<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $simboloMoeda = numfmt_get_symbol($padrao, NumberFormatter::CURRENCY_SYMBOL);
        $valor = $_REQUEST['valor'] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? <?=numfmt_get_symbol($padrao, NumberFormatter::CURRENCY_SYMBOL)?></label>
            <input type="number" name="valor" id="id_valor" min="0" step="0.01" value="<?=$valor?>">

            <p>Notas disponiveis: <?=numfmt_format_currency($padrao, 100, 'BRL') . " " . numfmt_format_currency($padrao, 50, 'BRL') . " " . numfmt_format_currency($padrao, 10, 'BRL') . " e " . numfmt_format_currency($padrao, 5, 'BRL')?></p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $resto = $valor;
            $tot100 = intdiv($resto, 100);
            $resto %= 100;
            $tot50 = intdiv($resto, 50);
            $resto %= 50;
            $tot20 = intdiv($resto, 20);
            $resto %= 20;
            $tot10 = intdiv($resto, 10);
            $resto %= 10;
            $tot5 = intdiv($resto, 5);
            $resto %= 5;
            $tot2 = intdiv($resto, 2);
            $resto %= 2;
            $tot1 = intdiv($resto, 1);

            echo"<h2> Saque de ". numfmt_format_currency($padrao, $valor, 'BRL') ." realziado </h2>";
        ?>
        <ul>
            <p>O caixa eletrônico vai te entragar as seguintes cédulas:</p>
            <li><img class="real1" src="Imagens/100-reais.jpg"> <?="x$tot100"?></li>
            <li><img class="real1" src="Imagens/50-reais.jpg"> <?="x$tot50"?></li>
            <li><img class="real1" src="Imagens/20-reais.jpg"> <?="x$tot20"?></li>
            <li><img class="real1" src="Imagens/10-reais.jpg"> <?="x$tot10"?></li>
            <li><img class="real1" src="Imagens/5-reais.jpg"> <?="x$tot5"?></li>
            <li><img class="real1" src="Imagens/2-reais.jpg"> <?="x$tot2"?></li>
            <li><img class="real1" src="Imagens/1-real.jpg"> <?="x$tot1"?></li>
        </ul>
    </section>
</body>
</html>