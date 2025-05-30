<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisar numero real</title>
</head>
<body>
    <header>
        <h1>Analisador de numero real</h1>
    <Section>
    <main>
        <?php 
            $num = $_REQUEST["num"] ?? 0;

            echo"Analisando o numero ".number_format($num, 3, ",",".");

            $int = (int) $num;
            $fra = $num - $int;

            echo"<ul><li> A parte inteira do numero é ".number_format($int, 0, ",",".")." </ul></li>";
            echo"<ul><li> A parte inteira do numero é ".number_format($fra, 3, ",",".")." </ul></li>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>