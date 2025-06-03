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
            echo"<h2> Saque de ". numfmt_format_currency($padrao, $valor, 'BRL') ." realziado </h2>";
        ?>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>
</body>
</html>