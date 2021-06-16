<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    require_once './Class/Caneta.php';

    $caneta1 = new Caneta;
    $caneta1->cor = 'Azul';
    $caneta1->ponta = 0.5;
    $caneta1->tampada = true;
    $caneta1->destampar();
    $caneta1->rabiscar();


    ?>
</body>
</html>