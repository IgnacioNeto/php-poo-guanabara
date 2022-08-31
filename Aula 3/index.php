<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>
<body>
    <pre>
        <?php 
        
            require_once 'Caneta.php';
            $c1 = new Caneta; // Instanciando
            $c1 -> modelo = "BIC cristal";
            $c1 -> cor = "Azul";
            // $c1 -> ponta = 0.5; // Gera erro pois é privado
            // $c1 -> carga = 99; // Gera erro pois é protegido
            // $c1 -> tampada = true; // Gera erro pois é protegido


            // $c1->rabiscar(); // Chamando método rabiscar

            // var_dump($c1);
            

            // Nos métodos
            $c1 -> rabiscar();
            // $c1 -> tampar(); // Gera erro pois é protegido
        
            print_r($c1);
        ?>
    </pre>
</body>
</html>