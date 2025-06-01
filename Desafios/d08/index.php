<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz quadrada e cubica</title>
</head>
<body>
    <?php 
        $valor = $_REQUEST['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Digite o numero</label>
            <input type="number" name="numero" id="id_numero" value="<?=$valor?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <?php 
            $raizQuadrada = sqrt($valor);
            $raizCubica = pow($valor, 1/3);

            echo "Analisando o numero $valor, temos:";
            echo "<ul><li>A sua raiz quadrada é " . number_format($raizQuadrada, 3, ","). "</ul></li>";
            echo "<ul><li>A sua raiz cubica é " . number_format($raizCubica, 3, ","). "</ul></li>"
        ?>
    </section>
</body>
</html>