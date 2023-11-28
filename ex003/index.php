<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constante</title>
</head>
<body>
    <?php 
        $nome = "Gilson";
        $sobrenome = "Alves";
        $idade = 48;
        $peso = 80.5;
        $estado_civil = "Solteiro";


        const PAIS = "Brasil";

        echo "Muito Prazer, $nome $sobrenome ! Você mora no " . PAIS . " e tem $idade anos pesa $peso e é $estado_civil" ;
    
    ?>
    
</body>
</html>