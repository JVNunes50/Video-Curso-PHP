<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Numeros</title>
</head>
<body>
    <header>
        <h1> Resultado </h1>
    </header>
    <main>
        <?php 
            $num = $_GET["num"] ?? 0;
            //$numMaior = $num + 1;
            //$numMenor = $num - 1;

            echo "O numero escolhido é $num<br>";
            //echo "O numero sucessor é $numMaior\n";
            //echo "O numero antecessor é $numMenor";
            
            echo "O numero sucessor é " . $num + 1 . "<br>";
            echo "O numero antecessor é " . $num - 1;
        ?>
        <!-- Voltar para a pagina anterior usando uma pagina de referencia -->
        <button onclick="javascript:window.location.href = 'index.html'">Voltar</button>
        
        <!-- Voltar para a pagina anterior usando o historico do navegador -->
        <!-- <button onclick="javascript:history.go(-1)">Voltar</button> -->
    </main>

</body>
</html>