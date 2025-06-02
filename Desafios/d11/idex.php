<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustando preços</title>
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? 0;
        $reajuste = $_REQUEST['reajuste'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Digite o preços (R$):</label>
            <input type="number" name="preco" id="id_preco" min="0" step="0.01" value="<?=$preco?>">

            <label for="reajuste">Qual sera o percentual de reajuste?</label>
            <input type="number" name="reajuste" id="id_reajuste" min="0" step="0.01" value="<?=$reajuste?>">

            <input type="submit" value="Calcular o reajuste">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <?php 
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $resultado = $preco * $reajuste / 100 + $preco;

            echo"O produto que custava " . numfmt_format_currency($padrao, $preco, 'BRL') . ", com o $reajuste% de aumento vai passar a custar ". numfmt_format_currency($padrao, $resultado, 'BRL') . " a partir de agora!";
        ?>
    </section>
</body>
</html>