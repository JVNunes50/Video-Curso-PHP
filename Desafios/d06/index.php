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
        $Divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="id_dividendo" value="<?=$Dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="id_divisor" value="<?=$Divisor?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            try{
            $cosiente = $Dividendo / $Divisor;
            $resto = $Dividendo % $Divisor;

            print "<ul><li>O dividendo é $Dividendo</ul></li>";
            print "<ul><li>O divisor é $Divisor</ul></li>";
            print "<ul><li>O cosiente é $cosiente</ul></li>";
            print "<ul><li>O resto da divisão é $resto</ul></li>";
            } catch(DivisionByZeroError $e){
                print"Não pode ser executado um divisão por zero (" . $e->getMessage() . ")";
            }
        ?>
    </section>
</body>
</html>