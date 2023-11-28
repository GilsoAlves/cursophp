<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia de Escape</title>
</head>
<body>
    <?php 
        #$nome = "Gilson";
        #$sobrenome = "Alves";
        #$apelido = "Lobão";
        #echo "$nome  " .$sobrenome. " $apelido"; //usando concatenação funciona sem aspas. 
        
        $nome = "Gilson";
        $sobrenome = "Alves";
        $apelido = "Lobão";
        echo "$nome  \" $sobrenome \" $apelido \u{1F61C} ";  // usando contra barra funciona e com aspas.
    ?>
    
</body>
</html>