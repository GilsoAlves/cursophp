<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de numero:</h1>
        <?php 
         $min = 0;
         $max= 10;

         // #372991, #15142b
         
         // $num = random_int($min, $max); // mais lento so se for para usar criptograficamente seguro.
         $num = mt_rand($min, $max);

         // rand() = surgiu em 1951 - Linear congrential Gererator
         // mt_rand() = surgiu em 1997 - Mersenne Twister ele é 4 vezes mais rapido que o rand.
         // A partir do PHP 7.1 , o rand() é um simples apontamento para mt_rand()
         # random_int() gera números aleatórios criptograficamente seguros.

         echo "Gerando numero entre $min e $max<br>";
         echo " O numero gerado foi <strong>$num</strong>";
         echo "Esse é seu numero $num gerado! Gilson"
        
        
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504;Gerar outro numero:</button>
    </main>
</body>
</html>