<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor</title>
</head>
<body>
    <header>
        <h1>
            Conversor de Real para Dolar
        </h1>
    </header>
    <main>
        <?php 
            $dolar = 5.67;
            $real = $_REQUEST["real"];
            $conversao = $real / $dolar;

            // echo"R\$ ".number_format($real, 2, ",", ".")." é equivalente a US\$". number_format($real / $dolar, 2, ",", ".");

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seu ".numfmt_format_currency($padrao, $real, "BRL")." equivale a ".numfmt_format_currency($padrao, $conversao, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>