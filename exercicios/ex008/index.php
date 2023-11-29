<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Heredoc</title>
</head>
<body>
    <?php 
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
        EL $curso?
                kjkxhc
          $ano.      


        FRASE;
    
    
    ?>
    
</body>
</html>