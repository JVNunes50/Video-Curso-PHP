<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média Aritmética</title>
</head>
<body>
    <?php 
        $valor1 = $_REQUEST['valor1'] ?? 0;
        $peso1 = $_REQUEST['peso1'] ?? 1;
        $valor2 = $_REQUEST['valor2'] ?? 0;
        $peso2 = $_REQUEST['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Primeiro valor:</label>
            <input type="number" name="valor1" id="id_valor1" min="0" max="10" value="<?=$valor1?>">

            <label for="peso1">Primeiro peso:</label>
            <input type="number" name="peso1" id="id_peso1" min="1" max="5" value="<?=$peso1?>">

            <label for="valor2">Segundo valor:</label>
            <input type="number" name="valor2" id="id_valor2" min="0" max="10" value="<?=$valor2?>">

            <label for="peso2">Segundo peso:</label>
            <input type="number" name="peso2" id="id_peso2" min="1" max="5" value="<?=$peso2?>">

            <input type="submit" value="Calcular Média">
        </form>
    </main>
    <section>
        <h1>Calculo das Médias</h1>
        <?php 
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPonderada = ($peso1 * $valor1 + $peso2 * $valor2) / ($peso1 + $peso2);

            echo "Analisando os valores de $valor1 e $valor2";
            echo "<ul><li>A Médias Aritméticas Simples entre os valores é igual a " . number_format($mediaSimples, 2, ',') . "</ul></li>";
            echo "<ul><li> Médias Aritméticas Ponderada com pesos 1 e 5 é igual a " . number_format($mediaPonderada, 2 , ',') . "</ul></li>"
        ?>
    </section>
</body>
</html>