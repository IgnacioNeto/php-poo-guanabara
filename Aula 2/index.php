<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta; // Instanciando
        $c1 -> cor = "Azul";
        $c1 -> ponta = 0.5;
        // $c1 -> tampada = false;
        $c1 ->tampar();
        print_r($c1);
        ?><br><?php

        $c2 = new Caneta; // Instanciando
        $c2 -> cor = "Verde";
        $c2 -> carga = 50;
        $c2 ->destampar();
        print_r($c2);

        // $c1->rabiscar(); // Chamando método rabiscar

        // var_dump($c1);
        // print_r($c1);
    
    ?>
    
</body>
</html>