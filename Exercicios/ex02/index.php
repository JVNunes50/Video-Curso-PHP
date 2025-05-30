<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        print "Hoje e dia " . date("d/M/Y");
        print " e a hora atual seria " . date("G:i:s");
    ?>
</body>
</html>