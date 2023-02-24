<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 4 </title>
    </head>
    <link rel="stylesheet" href="css4.css">
    <body>
        <pre>
        <?php   
            require_once 'Caneta4.php';

        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("Faber Castell", "Vermelho", 1.0);
        print_r($c1);
        print_r($c2);
        
        
        ?>
        </pre>
    </body>

</html>