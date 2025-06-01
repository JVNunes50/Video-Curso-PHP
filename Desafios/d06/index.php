<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisando uma divisão</title>
</head>
<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <?php 
        $Dividendo = $_GET['dividendo'] ?? 0;
        $Divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="id_dividendo" min="0" value="<?=$Dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="id_divisor" min= "1" value="<?=$Divisor?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
            $cosiente = intdiv($Dividendo, $Divisor);
            $resto = $Dividendo % $Divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$Divisor?></td>
                <td><?=$Dividendo?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$cosiente?></td>
            </tr>
        </table>
    </section>
</body>
</html>