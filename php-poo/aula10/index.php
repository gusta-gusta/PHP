<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10</title>
</head>
<body>
    <pre>
        <?php
            require_once "people.php";
            require_once "aluno.php";
            require_once "professor.php";
            require_once "funcionario";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Gusta");
            $p2->setNome("Lorenna");
            $p3->setNome("Lurdes");
            $p4->setNome("Rubão");

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
    </pre>
</body>
</html>