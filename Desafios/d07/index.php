<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário</title>
</head>
<body>
    <?php 
        $salarioMin = 1518.0;
        $salarioUsu = $_REQUEST['valor'] ?? 0;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Digiye o seu salario (R$)</label>
            <input type="number" name="valor" id="id_valor" min="0" step="0.01" value="<?=$salarioUsu?>">
            <?php 
                echo "<p>O valor do salário mínimo nacional é " . numfmt_format_currency($padrao, $salarioMin, "BRL")."</p>";
            ?>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <?php 
            $resultado = intdiv($salarioUsu, $salarioMin);
            $restoSalario = $salarioUsu % $salarioMin;

            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salarioUsu, "BRL") . " ganha " . $resultado . " salários mínimos + " . numfmt_format_currency($padrao, $restoSalario, "BRL") . "!";
        ?>
    </section>
</body>
</html>