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
            $inicio = date("m,d,Y", strtotime("-7 days"));
            $fim = date("m,d,Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_REQUEST["real"];
            $dolar = $real / $cotacao;

            // echo"R\$ ".number_format($real, 2, ",", ".")." é equivalente a US\$". number_format($real / $cotacao, 2, ",", ".");

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seu ".numfmt_format_currency($padrao, $real, "BRL")." equivale a ".numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>