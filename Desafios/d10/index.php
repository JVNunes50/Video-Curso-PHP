<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de idade</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $nascimento = $_REQUEST['nascimento'] ?? 2004;
        $ano = $_REQUEST['ano'] ?? date('Y');
    ?>
    <main>
        <h1>Calcule a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Digite o ano que você nasceu:</label>
            <input type="number" name="nascimento" id="id_nascimento" value="<?=$nascimento?>">

            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <?=date('Y')?>):</label>
            <input type="number" name="ano" id="id_ano" value="<?=$ano?>">

            <input type="submit" value="Sua idade é">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $resultado = $ano - $nascimento;

            echo "Quem nasceu em $nascimento vai ter $resultado em $ano!";
        ?>
    </section>
</body>
</html>