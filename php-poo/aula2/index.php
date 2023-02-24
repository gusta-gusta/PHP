<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>
<body>
    <?php
        require_once 'caneta.php'; //incluir um arquivo PHP em outro

        $c1 = new Caneta; // $c1 obj da classe Caneta
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1-> tampada = false;
        $c1 -> tampar(); // Chamar metodo

        $c1->rabiscar(); // Chamar metodo

        $c2 =  new Caneta;
        $c2->cor = "Preto";
        $c2->ponta = 1;
        $c2->tampada = false;

        $c2->rabiscar(); // Chamar metodo
    ?>

</body>
</html>