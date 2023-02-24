<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>
<pre>
    <?php

    
        require_once 'Caneta3.php';

        $c1 = new Caneta;
        $c1->modelo = "Faber Castell";
        $c1->cor = "Azul";
        print_r($c1);




        ?>
</pre>
</body>
</html>