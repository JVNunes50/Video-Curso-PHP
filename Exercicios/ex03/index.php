<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <header>
        <h1>Preencha os dados</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome"> Nome </label>
            <input type="text" name="nome" id="id_nome">

            <label for="sobrenome"> Sobrenome </label>
            <input type="text" name="sobrenome" id="id_sobrenome">

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>