<html>
    <head>
        <title>Aula 8</title>
    </head>
    <body>
    <pre>
        <?php
            require_once 'Lutadores.php';
            require_once 'Luta.php';
            $l = array();
            $l [0] = new Lutador("Gustavo", "Brasil", 21, 1.85, 80, 20, 0, 5);

            $l [1] = new Lutador("Mike Tyson", "USA", 48, 1.71, 97, 131, 50, 19);

            $l [2] = new Lutador("Jason MM", "Russia", 25, 1.80, 81, 15, 0, 10);

            $l [3] = new Lutador("Alan", "Russia", 24, 1.85, 85, 11, 1, 12);

            $l [4] = new Lutador("Rui", "Ucrania", 30, 1.75, 79, 5, 20, 60);

            $l [5] = new Lutador("Zoo", "Brasil", 20, 1.85, 80, 20, 0, 5);

            $WORD_BRAZIL_LUTA = new Luta();
            $WORD_BRAZIL_LUTA->marcarLuta($l[0], $l[2]);
            $WORD_BRAZIL_LUTA->Lutar();

            $l[0]->apresentar();
            
            $l[2]->apresentar();
        ?>
    </pre>
    </body>
    </html>