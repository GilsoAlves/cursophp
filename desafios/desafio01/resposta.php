<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
      
</head>
<body>
    <main>
        <h1>Resultado Final:</h1>
        <p>
            <?php 
                $numero = $_REQUEST["num"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo " O número escolhido foi <strong>$numero</strong>";
                echo " <br> O seu <em>antecessor</em> é $antecessor";
                echo "<br> O Seu <em>sucessor</em> é $sucessor";
            
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
        

    </main>
    
</body>
</html>