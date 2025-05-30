<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sortedor de numero</title>
</head>
<body>
    <header>
        <h1>Numero sorteado</h1>
    </header>
    <main>
    <?php
        // O mt_rand é mais novo que rand
        // random_int() gera um numero aleatorio criptografado
        // $numAleatorio = rand(1, 100) ?? 0;
        
        $numAleatorio = mt_rand(1, 100) ?? 0;
        echo"O numero de 0 a 100 gerado é $numAleatorio";
    ?>
    <button onclick="javascript:location.reload()">Sortear numero</button>
    </main>
</body>
</html>