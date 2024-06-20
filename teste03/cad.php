<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "desconecido";
        echo "<p> É um prazer e conhecer <strong>$n $s</strong>! Obrigado por visitar nosso site! </p>"
        ?>
        <a href="javascript:history.go(-1)">Volta para a primeira página!</a>
    </main>
    
</body>
</html>