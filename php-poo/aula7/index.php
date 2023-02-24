<html>
    <head>
        <title>Aula 7</title>
    </head>
    <body>
    <pre>
        <?php
            require_once 'Lutadores.php';
            $l = array();
            $l [0] = new Lutador("Gustavo", "Brasil", 21, 1.85, 80, 20, 0, 5);
            $l [1] = new Lutador("Mike Tyson", "USA", 48, 1.71, 97, 131, 50, 19);

            $l[1]->status();
            $l[0]->apresentar();
            $l[1]->apresentar();

        ?>
    </pre>
    </body>
    </html>