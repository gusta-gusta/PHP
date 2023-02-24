<html>
    <head>
        <title>Aula 6</title>
    </head>
<body>
    <pre>
        <?php

        require_once "Controle_Remoto.php";

        $c = new ControleRemoto();
        $c->ligar();    
        $c->ligarMudo();
        $c->abrirMenu();




        ?>
    </pre>

</body>

    </html>