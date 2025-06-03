<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        $segundosUsu = $_REQUEST['segundos'] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="id_segundos" min="0" value="<?=$segundosUsu?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h3>Totalizando tudo</h3>
        <?php 
            $semanas = intdiv($segundosUsu, 604800);
            $restoSemana = $segundosUsu % 604800;

            $dias = intdiv($restoSemana, 86400);
            $restoDias = $restoSemana % 86400;

            $horas = intdiv($restoDias, 3600);
            $restoHoras = $restoDias % 3600;

            $minutos = intdiv($restoHoras, 60);

            $segundos = $restoHoras % 60;

            echo"Analisando o valor que você digitou, <strong>" . number_format($segundosUsu, 3,'.', '.') . " segundos</strong> equivalem a um total de: ";
            echo"<ul><li> $semanas semanas </li></ul>";
            echo"<ul><li> $dias dias</li></ul>";
            echo"<ul><li> $horas horas </li></ul>";
            echo"<ul><li> $minutos minutos </li></ul>";
            echo"<ul><li> $segundos segundos </li></ul>";
        ?>
    </section>
</body>
</html>