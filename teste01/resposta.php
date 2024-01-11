<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resposta:</h1>
        <p>
            <?php
            $nome = $_GET["nome"] ?? 0;
            $numero = $_GET["num"] ?? 0;
            $ant = $numero -1;
            $suc = $numero +1 ;
            
            echo "o numero informado foi <strong>$numero</strong>,  ";
            echo "seu <i>antecessor</i> é <strong>$ant</strong>,  ";
            echo "<br>O seu <i>sucessor</i> é <strong>$suc</strong>,  ";
            echo "<br>O Número informado é <strong>$numero</strong> e " ." este  é o seu numero <strong>$nome</strong>";
            // &#X para colocar emojis em html.
            // \u{} para colocar emojis em php.
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;VOLTAR</button>
         
    </main>
        
</body>
</html>